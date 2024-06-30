<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\TugasAkhir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TugasAkhirController extends Controller
{
    protected $tugasAkhir;
    public function __construct(TugasAkhir $tugasAkhir)
    {
        $this->tugasAkhir = $tugasAkhir;
    }
    public function index()
    {
        $title = 'Tugas akhir';
        if (Auth::user()->role == 'mahasiswa') {
            $mahasiswa_id = Mahasiswa::where('user_id', Auth::user()->id)->value('id');
            $data = $this->tugasAkhir->ShowMahasiswa($mahasiswa_id);
            return view('mahasiswa.report.tugas-akhir', compact('title', 'data'));
        } elseif (Auth::user()->role == 'mentor') {
            $data = $this->tugasAkhir->ShowMentor();
            return view('mentor.report.tugas-akhir', compact('title', 'data'));
        }elseif (Auth::user()->role == 'section') {
            $data = $this->tugasAkhir->ShowSection();
            return view('section.report.tugas-akhir', compact('title', 'data'));
        }elseif(Auth::user()->role == 'dosen'){
            return view('dosen.report.tugas-akhir',[
                'title'=>$title,
                'data'=>$this->tugasAkhir->ShowDosen()
            ]);
        } elseif(Auth::user()->role == 'departement'){
            return view('departement.report.tugas-akhir',[
                'title'=>$title,
                'data'=>$this->tugasAkhir->ShowDepartement()
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
        $mahasiswa_id = Mahasiswa::where('user_id',Auth::user()->id)->first();
        $file = $request->file('nama_file');
        $nama_file = $file->hashName();
        $file->move(public_path('tugas_akhir'), $nama_file);
        $this->tugasAkhir->Store([
            'mahasiswa_id'=>$mahasiswa_id->id,
            'mentor_id'=>$mahasiswa_id->mentor_id,
            'section_id'=>$mahasiswa_id->section_id,
            'departement_id'=>$mahasiswa_id->departement_id,
            'nama_file' => $nama_file
        ]);
        return back()->with('sukses','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(TugasAkhir $tugasAkhir)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TugasAkhir $tugasAkhir)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TugasAkhir $tugasAkhir)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TugasAkhir $tugasAkhir)
    {
        //
    }
}
