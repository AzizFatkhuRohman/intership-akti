<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\NotifAdmin;
use App\Models\NotifDepartement;
use App\Models\NotifMahasiswa;
use App\Models\NotifMentor;
use App\Models\NotifSection;
use App\Models\Sertifikat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SertifikatController extends Controller
{
    protected $sertifikat;
    protected $notifMahasiswa;
    protected $notifMentor;
    protected $notifSection;
    protected $notifDepartement;
    protected $notifAdmin;
    public function __construct(Sertifikat $sertifikat,NotifMahasiswa $notifMahasiswa, NotifMentor $notifMentor,NotifSection $notifSection,NotifDepartement $notifDepartement,NotifAdmin $notifAdmin)
    {
        $this->sertifikat = $sertifikat;
        $this->notifMahasiswa=$notifMahasiswa;
        $this->notifMentor=$notifMentor;
        $this->notifSection=$notifSection;
        $this->notifDepartement=$notifDepartement;
        $this->notifAdmin=$notifAdmin;
    }
    public function index()
    {
        $title = 'Sertifikat';
        if (Auth::user()->role == 'mahasiswa') {
            $mahasiswa_id = Mahasiswa::where('user_id', Auth::user()->id)->value('id');
            $data = $this->sertifikat->ShowMahasiswa($mahasiswa_id);
            $notif = $this->notifMahasiswa->Show();
            $count = $this->notifMahasiswa->Count();
            return view('mahasiswa.report.sertifikat', compact('title', 'data','notif','count'));
        } elseif (Auth::user()->role == 'mentor') {
            $data = $this->sertifikat->ShowMentor();
            $notif= $this->notifMentor->Show();
            $count = $this->notifMentor->Count();
            return view('mentor.report.sertifikat', compact('title', 'data','notif','count'));
        }elseif (Auth::user()->role == 'section') {
            $data = $this->sertifikat->ShowSection();
            $notif = $this->notifSection->Show();
            $count = $this->notifSection->Count();
            return view('section.report.sertifikat', compact('title', 'data','notif','count'));
        }elseif(Auth::user()->role == 'departement'){
            return view('departement.report.sertifikat',[
                'title'=>$title,
                'data'=>$this->sertifikat->ShowDepartement(),
                'notif'=>$this->notifDepartement->Show(),
                'count'=>$this->notifDepartement->Count()
            ]);
        }elseif(Auth::user()->role == 'dosen'){
            return view('dosen.report.sertifikat',[
                'title'=>$title,
                'data'=>$this->sertifikat->ShowDosen(),
                'notif'=>$this->notifAdmin->ShowDosen(),
                'count'=>$this->notifAdmin->CountDosen()
            ]);
        }
        else{
            return view('admin.report.sertifikat',[
                'title'=>$title,
                'data'=>Sertifikat::latest()->paginate(10),
                'notif'=>$this->notifAdmin->Show(),
                'count'=>$this->notifAdmin->Count()
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
        if ($mahasiswa_id == null) {
            return back()->with('gagal','Lengkapi profilmu');
        } else {
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
        $this->notifAdmin->Store([
            'mahasiswa_id'=>$mahasiswa_id->id,
            'mentor_id' => $mahasiswa_id->mentor_id,
            'section_id' => $mahasiswa_id->section_id,
            'departement_id' => $mahasiswa_id->departement_id,
            'content'=>Auth::user()->nama.' Telah unggah Sertifikat'
        ]);
        return back()->with('sukses', 'Data berhasil ditambahkan');
        }
        
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
    public function update(Request $request, $id)
    {
        $mahasiswa_id = Mahasiswa::where('user_id', Auth::user()->id)->first();
        $file = $request->file('nama_file');
        $nama_file = $file->hashName();
        $file->move(public_path('sertifikat'), $nama_file);
        $this->sertifikat->Edit($id,[
            'mahasiswa_id'=>$mahasiswa_id->id,
            'mentor_id'=>$mahasiswa_id->mentor_id,
            'section_id'=>$mahasiswa_id->section_id,
            'departement_id'=>$mahasiswa_id->departement_id,
            'nama_file' => $nama_file
        ]);
        $this->notifAdmin->Store([
            'mahasiswa_id'=>$mahasiswa_id->id,
            'mentor_id' => $mahasiswa_id->mentor_id,
            'section_id' => $mahasiswa_id->section_id,
            'departement_id' => $mahasiswa_id->departement_id,
            'content'=>Auth::user()->nama.' Telah unggah Sertifikat'
        ]);
        return redirect('mahasiswa/report/sertifikat')->with('sukses', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sertifikat $sertifikat)
    {
        //
    }
}
