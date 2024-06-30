<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SertifikatController extends Controller
{
    protected $sertifikat;
    public function __construct(Sertifikat $sertifikat)
    {
        $this->sertifikat = $sertifikat;
    }
    public function index()
    {
        $title = 'Sertifikat';
        if (Auth::user()->role == 'mahasiswa') {
            $mahasiswa_id = Mahasiswa::where('user_id', Auth::user()->id)->value('id');
            $data = $this->sertifikat->ShowMahasiswa($mahasiswa_id);
            return view('mahasiswa.report.sertifikat', compact('title', 'data'));
        } elseif (Auth::user()->role == 'mentor') {
            $data = $this->sertifikat->ShowMentor();
            return view('mentor.report.report-a3', compact('title', 'data'));
        }elseif (Auth::user()->role == 'section') {
            $data = $this->sertifikat->ShowSection();
            return view('section.report.report-a3', compact('title', 'data'));
        }elseif(Auth::user()->role == 'departement'){
            return view('departement.report.sertifikat',[
                'title'=>$title,
                'data'=>$this->sertifikat->ShowDepartement()
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
        $file = $request->file('nama_file');
        $nama_file = $file->hashName();
        $file->move(public_path('sertifikat'), $nama_file);
        $this->sertifikat->Store([
            'mahasiswa_id'=>$mahasiswa_id->id,
            'mentor_id'=>$mahasiswa_id->mentor_id,
            'section_id'=>$mahasiswa_id->section_id,
            'departement_id'=>$mahasiswa_id->departement_id,
            'nama_file' => $nama_file
        ]);
        return back()->with('sukses', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sertifikat $sertifikat)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sertifikat $sertifikat)
    {
        //
    }
}
