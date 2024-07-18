<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Mentor;
use App\Models\NotifAdmin;
use App\Models\NotifMahasiswa;
use App\Models\PindahMentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PindahMentorController extends Controller
{
    protected $pindahMentor;
    protected $notifMahasiswa;
    protected $notifAdmin;
    public function __construct(PindahMentor $pindahMentor,NotifMahasiswa $notifMahasiswa,NotifAdmin $notifAdmin){
        $this->pindahMentor=$pindahMentor;
        $this->notifMahasiswa=$notifMahasiswa;
        $this->notifAdmin=$notifAdmin;
    }
    public function index()
    {
        $title = 'Pindah Mentor';
        $mentor = Mentor::latest()->get();
        if (Auth::user()->role == 'mahasiswa') {
            $data = $this->pindahMentor->ShowMahasiswa();
            $notif = $this->notifMahasiswa->Show();
            $count = $this->notifMahasiswa->Count();
            return view('mahasiswa.manajemen.pindah-mentor',compact('title','mentor','data','notif','count'));
        } elseif (Auth::user()->role == 'admin')  {
            $data = $this->pindahMentor->ShowAdmin();
            $mahasiswa = Mahasiswa::latest()->get();
            $notif = $this->notifAdmin->Show();
            $count = $this->notifAdmin->Count();
            return view('admin.pengajuan-mentor',compact('title','data','mentor','mahasiswa','notif','count'));
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mahasiswa_id = Mahasiswa::where('user_id',Auth::user()->id)->value('id');
        $mentor_id = Mentor::find($request->mentor_id)->first();
        $this->pindahMentor->Store([
            'mahasiswa_id'=>$mahasiswa_id,
            'mentor_id'=>$request->mentor_id,
            'section_id'=>$mentor_id->section_id,
            'departement_id'=>$mentor_id->departement_id
        ]);
        return back()->with('sukses','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(PindahMentor $pindahMentor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PindahMentor $pindahMentor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $this->pindahMentor->Edit($id,[
            'status'=>$request->status
        ]);
        if ($request->status == 'accept') {
            $mahasiswa_id = PindahMentor::find($id)->first();
        Mahasiswa::find($mahasiswa_id->mahasiswa_id)->update([
            'mentor_id'=>$mahasiswa_id->mentor_id,
            'section_id'=>$mahasiswa_id->section_id,
            'departement_id'=>$mahasiswa_id->departement_id
        ]);
        }
        return redirect('admin/pengajuan-mentor')->with('sukses','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->pindahMentor->Hapus($id);
        return redirect('mahasiswa/manajemen/pindah-mentor')->with('sukses','Data berhasil dibatalkan');
    }
}
