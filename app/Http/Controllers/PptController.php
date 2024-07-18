<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Mentor;
use App\Models\NotifAdmin;
use App\Models\NotifDepartement;
use App\Models\NotifMahasiswa;
use App\Models\NotifMentor;
use App\Models\NotifSection;
use App\Models\Ppt;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PptController extends Controller
{
    protected $ppt;
    protected $mahasiswa;
    protected $notifMahasiswa;
    protected $notifMentor;
    protected $notifSection;
    protected $notifDepartement;
    protected $notifAdmin;
    public function __construct(Ppt $ppt, Mahasiswa $mahasiswa,NotifMahasiswa $notifMahasiswa, NotifMentor $notifMentor, NotifSection $notifSection,NotifDepartement $notifDepartement,NotifAdmin $notifAdmin)
    {
        $this->ppt = $ppt;
        $this->mahasiswa = $mahasiswa;
        $this->notifMahasiswa = $notifMahasiswa;
        $this->notifMentor=$notifMentor;
        $this->notifSection=$notifSection;
        $this->notifDepartement=$notifDepartement;
        $this->notifAdmin=$notifAdmin;
    }
    public function index()
    {
        $title = 'PPT';
        if (Auth::user()->role == 'mahasiswa') {
            $mahasiswa_id = Mahasiswa::where('user_id', Auth::user()->id)->value('id');
            $data = $this->ppt->ShowMahasiswa($mahasiswa_id);
            $notif = $this->notifMahasiswa->Show();
            $count = $this->notifMahasiswa->Count();
            return view('mahasiswa.report.ppt', compact('title', 'data','notif','count'));
        } elseif (Auth::user()->role == 'mentor') {
            $mentor_id = Mentor::where('user_id', Auth::user()->id)->value('id');
            $data = Ppt::where('mentor_id', $mentor_id)->latest()->paginate(20);
            $notif= $this->notifMentor->Show();
            $count = $this->notifMentor->Count();
            return view('mentor.report.ppt', compact('title', 'data','notif','count'));
        } elseif (Auth::user()->role == 'section') {
            $section_id = Section::where('user_id', Auth::user()->id)->value('id');
            $data = Ppt::where('section_id', $section_id)->latest()->paginate(20);
            $notif = $this->notifSection->Show();
            $count = $this->notifSection->Count();
            return view('section.report.ppt', compact('title', 'data','notif','count'));
        } elseif(Auth::user()->role == 'dosen'){
            $dosen_id = Dosen::where('user_id',Auth::user()->id)->value('id');
            $mahasiswa_id = Mahasiswa::where('dosen_id',$dosen_id)->pluck('id');
            return view('dosen.report.ppt',[
                'title'=>$title,
                'data'=>Ppt::whereIn('mahasiswa_id',$mahasiswa_id)->latest()->paginate(20),
                'notif'=>$this->notifAdmin->ShowDosen(),
                'count'=>$this->notifAdmin->CountDosen()
            ]);
        } elseif (Auth::user()->role == 'departement'){
            return view('departement.report.ppt',[
                'title'=>$title,
                'data'=>$this->ppt->ShowDepartement(),
                'notif'=>$this->notifDepartement->Show(),
                'count'=>$this->notifDepartement->Count()
            ]);
        } else{
            return view('admin.report.ppt',[
                'title'=>$title,
                'data'=>Ppt::latest()->paginate(10),
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
        $file = $request->file('nama_file');
        $nama_file = $file->hashName();
        $file->move(public_path('ppt'), $nama_file);
        $this->ppt->Store([
            'mahasiswa_id' => $mahasiswa_id->id,
            'mentor_id' => $mahasiswa_id->mentor_id,
            'section_id' => $mahasiswa_id->section_id,
            'departement_id' => $mahasiswa_id->departement_id,
            'nama_file' => $nama_file
        ]);
        $this->notifAdmin->Store([
            'mahasiswa_id'=>$mahasiswa_id->id,
            'mentor_id' => $mahasiswa_id->mentor_id,
            'section_id' => $mahasiswa_id->section_id,
            'departement_id' => $mahasiswa_id->departement_id,
            'content'=>Auth::user()->nama.' Telah unggah PPT'
        ]);
        return back()->with('sukses', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ppt $ppt)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ppt $ppt)
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
        $file->move(public_path('ppt'), $nama_file);
        $this->ppt->Edit($id,[
            'mahasiswa_id' => $mahasiswa_id->id,
            'mentor_id' => $mahasiswa_id->mentor_id,
            'section_id' => $mahasiswa_id->section_id,
            'departement_id' => $mahasiswa_id->departement_id,
            'nama_file' => $nama_file
        ]);
        $this->notifAdmin->Store([
            'mahasiswa_id'=>$mahasiswa_id->id,
            'mentor_id' => $mahasiswa_id->mentor_id,
            'section_id' => $mahasiswa_id->section_id,
            'departement_id' => $mahasiswa_id->departement_id,
            'content'=>Auth::user()->nama.' Telah unggah PPT'
        ]);
        return redirect('mahasiswa/report/ppt')->with('sukses','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ppt $ppt)
    {
        //
    }
}
