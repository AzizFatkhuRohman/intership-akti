<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Mentor;
use App\Models\NotifMahasiswa;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MentorController extends Controller
{
    protected $mentor;
    protected $notifMahasiswa;
    public function __construct(Mentor $mentor,NotifMahasiswa $notifMahasiswa)
    {
        $this->mentor = $mentor;
        $this->notifMahasiswa=$notifMahasiswa;
    }
    public function index()
    {
        $title = 'Mentor';
        $user = User::where('role', 'mentor')->orderBy('nama', 'desc')->get();
        $sectionData = Section::latest()->get();
        $departementData = Departement::latest()->get();
        $data = $this->mentor->ShowAdmin();
        if (Auth::user()->role == 'mahasiswa') {
            $notif = $this->notifMahasiswa->Show();
            $count = $this->notifMahasiswa->Count();
            return view('mahasiswa.manajemen.mentor', compact('title', 'data', 'user', 'sectionData','departementData','notif','count'));
        } elseif (Auth::user()->role == 'admin') {
            return view('admin.manajemen.mentor', compact('title', 'data', 'user', 'sectionData','departementData'));
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
        $section_id = Section::find($request->section_id)->first();
        $this->mentor->Store([
            'user_id' => $request->user_id,
            'section_id' => $request->section_id,
            'departement_id'=>$section_id->departement_id,
            'no_telp' => $request->no_telp,
            'divisi' => $request->divisi,
            'shop' => $request->shop,
            'line' => $request->line,
            'pos' => $request->pos,
            'nama_gl' => $request->nama_gl
        ]);
        return back()->with('sukses', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mentor $mentor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mentor $mentor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $section_id = Section::find($request->section_id)->first();
        $this->mentor->Edit($id,[
            'section_id' => $request->section_id,
            'departement_id'=>$section_id->departement_id,
            'no_telp' => $request->no_telp,
            'divisi' => $request->divisi,
            'shop' => $request->shop,
            'line' => $request->line,
            'pos' => $request->pos,
            'nama_gl' => $request->nama_gl
        ]);
        return redirect('admin/manajemen/mentor')->with('sukses', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->mentor->Hapus($id);
        if (Auth::user()->role == 'admin') {
            return redirect('admin/manajemen/mentor')->with('sukses','Data berhasil dihapus');
        } else {
            return redirect('mahasiswa/manajemen/mentor')->with('sukses','Data berhasil dihapus');
        }
        
    }
    public function search(Request $request){
        $title = 'Mentor';
        $keyword = $request->cari;
        $data = User::where('nama', 'LIKE', "%$keyword%")
            ->orWhere('nomor_induk', 'LIKE', "%$keyword%")
            ->paginate(10);
        if (Auth::user()->role = 'mahasiswa') {
        return view('mahasiswa.manajemen.pengguna',[
            'title'=>$title,
            'data'=> $data,
            'notif'=> $this->notifMahasiswa->Show(),
            'count'=> $this->notifMahasiswa->Count()
        ]);
        } else {
            # code...
        }
        
    }
}
