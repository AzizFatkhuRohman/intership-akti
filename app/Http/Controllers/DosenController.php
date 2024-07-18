<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\NotifAdmin;
use App\Models\NotifMahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    protected $dosen;
    protected $notifMahasiswa;
    protected $notifAdmin;
    public function __construct(Dosen $dosen,NotifMahasiswa $notifMahasiswa,NotifAdmin $notifAdmin)
    {
        $this->dosen = $dosen;
        $this->notifMahasiswa=$notifMahasiswa;
        $this->notifAdmin=$notifAdmin;
    }
    public function index()
    {
        $title = 'Dosen';
        $user = User::where('role', 'dosen')->orderBy('nama', 'desc')->get();
        $data = $this->dosen->ShowAdmin();
        if (Auth::user()->role == 'admin') {
            $notif = $this->notifAdmin->Show();
            $count = $this->notifAdmin->Count();
            return view('admin.manajemen.dosen', compact('title', 'user', 'data','notif','count'));
        } elseif (Auth::user()->role == 'mahasiswa') {
            $notif = $this->notifMahasiswa->Show();
            $count = $this->notifMahasiswa->Count();
            return view('mahasiswa.manajemen.dosen', compact('title', 'user', 'data','notif','count'));
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
        $this->dosen->Store([
            'user_id' => $request->user_id
        ]);
        return back()->with('sukses', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dosen $dosen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        //
    }
}
