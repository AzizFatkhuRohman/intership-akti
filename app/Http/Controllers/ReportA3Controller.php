<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\NotifAdmin;
use App\Models\NotifDepartement;
use App\Models\NotifMahasiswa;
use App\Models\NotifMentor;
use App\Models\NotifSection;
use App\Models\ReportA3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportA3Controller extends Controller
{
    protected $reportA3;
    protected $notifMentor;
    protected $notifMahasiswa;
    protected $notifSection;
    protected $notifDepartement;
    protected $notifAdmin;
    public function __construct(ReportA3 $reportA3,NotifMentor $notifMentor,NotifMahasiswa $notifMahasiswa,NotifSection $notifSection,NotifDepartement $notifDepartement,NotifAdmin $notifAdmin){
        $this->reportA3=$reportA3;
        $this->notifMentor=$notifMentor;
        $this->notifMahasiswa=$notifMahasiswa;
        $this->notifSection = $notifSection;
        $this->notifDepartement=$notifDepartement;
        $this->notifAdmin=$notifAdmin;
    }
    public function index()
    {
        $title = 'Report A3';
        if (Auth::user()->role == 'mahasiswa') {
            $mahasiswa_id = Mahasiswa::where('user_id', Auth::user()->id)->value('id');
            $data = $this->reportA3->ShowMahasiswa($mahasiswa_id);
            $notif = $this->notifMahasiswa->Show();
            $count = $this->notifMahasiswa->Count();
            return view('mahasiswa.report.a3', compact('title', 'data','notif','count'));
        } elseif (Auth::user()->role == 'mentor') {
            $data = $this->reportA3->ShowMentor();
            $notif= $this->notifMentor->Show();
            $count = $this->notifMentor->Count();
            return view('mentor.report.report-a3', compact('title', 'data','notif','count'));
        }elseif (Auth::user()->role == 'section') {
            $data = $this->reportA3->ShowSection();
            $notif=$this->notifSection->Show();
            $count = $this->notifSection->Count();
            return view('section.report.report-a3', compact('title', 'data','notif','count'));
        }elseif(Auth::user()->role == 'departement'){
            return view('departement.report.report-a3',[
                'title'=>$title,
                'data'=>$this->reportA3->ShowDepartement(),
                'notif'=>$this->notifDepartement->Show(),
                'count'=>$this->notifDepartement->Count()
            ]);
        }
        elseif(Auth::user()->role == 'dosen'){
            return view('dosen.report.report-a3',[
                'title'=>$title,
                'data'=>$this->reportA3->ShowDosen(),
                'notif'=>$this->notifAdmin->ShowDosen(),
                'count'=>$this->notifAdmin->CountDosen()
            ]);
        }
        else{
            return view('admin.report.report-a3',[
                'title'=>$title,
                'data'=>ReportA3::latest()->paginate(10),
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
        $mahasiswa_id = Mahasiswa::where('user_id',Auth::user()->id)->first();
        if ($mahasiswa_id == null) {
            return back()->with('gagal','Lengkapi profilmu');
        } else {
            $file = $request->file('nama_file');
        $nama_file = $file->hashName();
        $file->move(public_path('a3'), $nama_file);
        $this->reportA3->Store([
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
            'content'=>Auth::user()->nama.' Telah unggah Report A3'
        ]);
        return back()->with('sukses', 'Data berhasil ditambahkan');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(ReportA3 $reportA3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReportA3 $reportA3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $mahasiswa_id = Mahasiswa::where('user_id',Auth::user()->id)->first();
        $file = $request->file('nama_file');
        $nama_file = $file->hashName();
        $file->move(public_path('a3'), $nama_file);
        $this->reportA3->Edit($id,[
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
            'content'=>Auth::user()->nama.' Telah unggah Report A3'
        ]);
        return redirect('mahasiswa/report/report-a3')->with('sukses', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReportA3 $reportA3)
    {
        //
    }
}
