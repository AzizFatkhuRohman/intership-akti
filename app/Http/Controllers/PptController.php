<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Mentor;
use App\Models\NotifMahasiswa;
use App\Models\NotifMentor;
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
    public function __construct(Ppt $ppt, Mahasiswa $mahasiswa,NotifMahasiswa $notifMahasiswa, NotifMentor $notifMentor)
    {
        $this->ppt = $ppt;
        $this->mahasiswa = $mahasiswa;
        $this->notifMahasiswa = $notifMahasiswa;
        $this->notifMentor=$notifMentor;
    }
    public function index()
    {
        $title = 'PPT';
        if (Auth::user()->role == 'mahasiswa') {
            $mahasiswa_id = Mahasiswa::where('user_id', Auth::user()->id)->value('id');
            $data = $this->ppt->ShowMahasiswa($mahasiswa_id);
            return view('mahasiswa.report.ppt', compact('title', 'data'));
        } elseif (Auth::user()->role == 'mentor') {
            $mentor_id = Mentor::where('user_id', Auth::user()->id)->value('id');
            $data = Ppt::where('mentor_id', $mentor_id)->latest()->paginate(20);
            $notif= $this->notifMentor->Show();
            $count = $this->notifMentor->Count();
            return view('mentor.report.ppt', compact('title', 'data','notif','count'));
        } elseif (Auth::user()->role == 'section') {
            $section_id = Section::where('user_id', Auth::user()->id)->value('id');
            $data = Ppt::where('section_id', $section_id)->latest()->paginate(20);
            return view('section.report.ppt', compact('title', 'data'));
        } elseif(Auth::user()->role == 'dosen'){
            $dosen_id = Dosen::where('user_id',Auth::user()->id)->value('id');
            $mahasiswa_id = Mahasiswa::where('dosen_id',$dosen_id)->value('id');
            return view('dosen.report.ppt',[
                'title'=>$title,
                'data'=>Ppt::where('mahasiswa_id',$mahasiswa_id)->latest()->paginate(20)
            ]);
        } elseif (Auth::user()->role == 'departement'){
            return view('departement.report.ppt',[
                'title'=>$title,
                'data'=>$this->ppt->ShowDepartement()
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
    public function update(Request $request, Ppt $ppt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ppt $ppt)
    {
        //
    }
}
