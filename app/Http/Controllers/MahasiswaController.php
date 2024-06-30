<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Departement;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Mentor;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    protected $mahasiswa;
    protected $dosen;
    protected $mentor;
    protected $section;
    protected $departement;
    public function __construct(Mahasiswa $mahasiswa, Dosen $dosen, Mentor $mentor, Section $section, Departement $departement)
    {
        $this->mahasiswa = $mahasiswa;
        $this->dosen = $dosen;
        $this->mentor = $mentor;
        $this->departement=$departement;
        $this->section=$section;
    }
    public function index()
    {
        $title = 'Mahasiswa';
        if (Auth::user()->role == 'admin') {
            $data = $this->mahasiswa->ShowAdmin();
            $dataDosen = Dosen::latest()->get();
            $dataMentor = Mentor::latest()->get();
            $dataSection = Section::latest()->get();
            $dataDepartement = Departement::latest()->get();
            $user = User::where('role', 'mahasiswa')->orderBy('nama', 'desc')->get();
            return view('admin.manajemen.mahasiswa', compact('title', 'data', 'dataDosen', 'dataMentor', 'user','dataSection','dataDepartement'));
        } elseif (Auth::user()->role == 'mentor') {
            $data = $this->mahasiswa->ShowMentor();
            return view('mentor.manajemen.mahasiswa', compact('title', 'data'));
        } elseif (Auth::user()->role == 'section') {
            $data = $this->mahasiswa->ShowSection();
            return view('section.manajemen.mahasiswa', compact('title', 'data'));
        } elseif(Auth::user()->role == 'dosen'){
            return view('dosen.manajemen.mahasiswa',[
                'data'=>$this->mahasiswa->ShowDosen(),
                'title'=>$title
            ]);
        } else {
            return view('departement.manajemen.mahasiswa',[
                'title'=>$title,
                'data'=>$this->mahasiswa->ShowDepartement()
            ]);
        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mentor_id = Mentor::where('id',$request->mentor_id)->first();
        if (Auth::user()->role == 'mahasiswa') {
            
            $this->mahasiswa->Store([
                'user_id' => Auth::user()->id,
                'mentor_id' => $request->mentor_id,
                'section_id'=>$mentor_id->section_id,
                'departement_id'=>$mentor_id->departement_id,
                'dosen_id' => $request->dosen_id,
                'no_reg' => $request->no_reg,
                'batch' => $request->batch
            ]);
            return redirect('mahasiswa/dashboard')->with('sukses', 'Data berhasil ditambahkan');
        } else {
            $this->mahasiswa->Store([
                'user_id' => $request->user_id,
                'mentor_id' => $request->mentor_id,
                'section_id'=>$mentor_id->section_id,
                'departement_id'=>$mentor_id->departement_id,
                'dosen_id' => $request->dosen_id,
                'no_reg' => $request->no_reg,
                'batch' => $request->batch
            ]);
            return back()->with('sukses', 'Data berhasil ditambahkan');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $title = 'Mahasiswa';
        $absensi = Absensi::where('mahasiswa_id', $id)->latest()->paginate(20);
        $mahasiswa = Mahasiswa::find($id)->first();
        if (Auth::user()->role == 'mentor') {
            return view('mentor.manajemen.detail-mahasiswa', compact('title', 'absensi','mahasiswa'));
        } elseif (Auth::user()->role == 'section') {
            return view('section.manajemen.detail-mahasiswa', compact('title', 'absensi','mahasiswa'));
        } elseif(Auth::user()->role == 'dosen'){
            return view('dosen.manajemen.detail-mahasiswa',[
                'mahasiswa'=>$mahasiswa,
                'absensi'=>$absensi,
                'title'=>$title
            ]);
        } elseif(Auth::user()->role == 'departement'){
            return view('departement.manajemen.detail-mahasiswa',[
                'title'=>$title,
                'absensi'=>$absensi,
                'mahasiswa'=>$mahasiswa
            ]);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $mentor_id = Mentor::where('id',$request->mentor_id)->first();
        $this->mahasiswa->Edit($id,[
            'mentor_id' => $request->mentor_id,
            'section_id'=>$mentor_id->section_id,
            'departement_id'=>$mentor_id->departement_id,
            'dosen_id' => $request->dosen_id,
            'no_reg' => $request->no_reg,
            'batch' => $request->batch
        ]);
        return back()->with('sukses', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->mahasiswa->Hapus($id);
        return redirect('admin/manajemen/mahasiswa')->with('sukses','Data berhasil dihapus');
    }
    public function search(Request $request){
        $title = 'Mahasiswa';
        $keyword = $request->cari;
        if (Auth::user()->role == 'mentor') {
            $mentor_id = Mentor::where('user_id',Auth::user()->id)->value('id');
            return view('mentor.manajemen.mahasiswa',[
                'title'=>$title,
                'data'=>Mahasiswa::where('mentor_id', $mentor_id)
                ->whereHas('user', function($query) use ($keyword) {
                    $query->where('nama', 'LIKE', "%$keyword%");
                })
                ->where('shift', 'LIKE', "%$keyword%") 
                ->where('batch', 'LIKE', "%$keyword%")// Tambahkan kondisi pencarian untuk kolom shift
                ->latest()
                ->paginate(10)
            ]);
        } else {
            # code...
        }
        
    }
}
