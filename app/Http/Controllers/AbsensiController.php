<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Mahasiswa;
use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsensiController extends Controller
{
    protected $absensi;
    public function __construct(Absensi $absensi)
    {
        $this->absensi = $absensi;
    }
    public function index()
    {
        $title = 'Absensi';
        if (Auth::user()->role == 'mentor') {
            $data = $this->absensi->ShowMentor();
            return view('mentor.manajemen.absensi', compact('title', 'data'));
        } elseif (Auth::user()->role == 'section') {
            $data = $this->absensi->ShowSection();
            return view('section.manajemen.absensi', compact('title', 'data'));
        } elseif (Auth::user()->role == 'mahasiswa') {
            $data = $this->absensi->ShowMahasiswa();
            return view('mahasiswa.absensi', compact('title', 'data'));
        } elseif(Auth::user()->role == 'dosen'){
            return view('dosen.manajemen.absensi',[
                'title'=>$title,
                'data'=>$this->absensi->ShowDosen()
            ]);
        } elseif (Auth::user()->role == 'departement'){
            return view('departement.manajemen.absensi',[
                'title'=>$title,
                'data'=>$this->absensi->ShowDepartement()
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
        $mahasiswa_id = Mahasiswa::where('user_id', Auth::user()->id)->first();
        if (!$request->gambar) {
            $this->absensi->Store([
                'mahasiswa_id' => $mahasiswa_id->id,
                'mentor_id'=>$mahasiswa_id->mentor_id,
                'section_id'=>$mahasiswa_id->section_id,
                'departement_id'=>$mahasiswa_id->departement_id,
                'keterangan' => $request->keterangan
            ]);
        } else {
            $file = $request->file('gambar');
            $namaGambar = $file->getClientOriginalName();
            $file->move(public_path('absensi'), $namaGambar);
            $this->absensi->Store([
                'mahasiswa_id' => $mahasiswa_id->id,
                'mentor_id'=>$mahasiswa_id->mentor_id,
                'section_id'=>$mahasiswa_id->section_id,
                'departement_id'=>$mahasiswa_id->departement_id,
                'keterangan' => $request->keterangan,
                'gambar' => $namaGambar
            ]);
        }
        return back()->with('sukses', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Absensi $absensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absensi $absensi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->role == 'mahasiswa') {
            $mahasiswa_id = Mahasiswa::where('user_id', Auth::user()->id)->value('id');
            if (!$request->gambar) {
                $this->absensi->Edit($id, [
                    'mahasiswa_id' => $mahasiswa_id,
                    'keterangan' => $request->keterangan
                ]);
            } else {
                $file = $request->file('gambar');
                $namaGambar = $file->getClientOriginalName();
                $file->move(public_path('absensi'), $namaGambar);
                $this->absensi->Edit($id, [
                    'mahasiswa_id' => $mahasiswa_id,
                    'keterangan' => $request->keterangan,
                    'gambar' => $namaGambar
                ]);
            }
            return redirect('mahasiswa/absensi')->with('sukses', 'Data berhasil diubah');
        } else {
            $this->absensi->Edit($id, [
                'keterangan' => $request->keterangan,
                'status' => $request->status
            ]);
            return redirect('mentor/manajemen/absensi')->with('sukses', 'Data berhasil diubah');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absensi $absensi)
    {
        //
    }
    public function search(Request $request){
        $title = 'Absensi';
        $keyword = $request->cari;
        if (Auth::user()->role == 'mahasiswa') {
        $mahasiswa_id = Mahasiswa::where('user_id', Auth::user()->id)->value('id');
        return view('mahasiswa.absensi',[
            'title'=>$title,
            'data'=> Absensi::where('mahasiswa_id', $mahasiswa_id)
            ->where(function ($query) use ($keyword) {
                $query->where('keterangan', 'LIKE', "%$keyword%")
                      ->orWhere('status', 'LIKE', "%$keyword%");
            })
            ->paginate(10)
        ]);
        } elseif(Auth::user()->role == 'mentor') {
            $mentor_id = Mentor::where('user_id',Auth::user()->id)->value('id');
           return view('mentor.manajemen.absensi',[
            'title'=>$title,
            'data'=> Absensi::where('mentor_id', $mentor_id)
            ->where(function ($query) use ($keyword) {
                $query->where('keterangan', 'LIKE', "%$keyword%")
                      ->orWhere('status', 'LIKE', "%$keyword%");
            })
            ->paginate(10)
        ]);
        }
        
    }
}
