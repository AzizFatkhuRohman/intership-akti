<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\NotifAdmin;
use App\Models\NotifMahasiswa;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SectionController extends Controller
{
    protected $section;
    protected $notifMahasiswa;
    protected $notifAdmin;
    public function __construct(Section $section,NotifMahasiswa $notifMahasiswa,NotifAdmin $notifAdmin)
    {
        $this->section = $section;
        $this->notifMahasiswa=$notifMahasiswa;
        $this->notifAdmin=$notifAdmin;
    }
    public function index()
    {
        $title = 'Section';
        $user = User::where('role', 'section')->orderBy('nama', 'desc')->get();
        $data = $this->section->ShowAdmin();
        $departementData = Departement::latest()->get();
        if (Auth::user()->role == 'admin') {
            $notif = $this->notifAdmin->Show();
            $count = $this->notifAdmin->Count();
            return view('admin.manajemen.section', compact('title', 'data', 'user', 'departementData','notif','count'));
        } elseif (Auth::user()->role == 'mahasiswa') {
            $notif = $this->notifMahasiswa->Show();
            $count = $this->notifMahasiswa->Count();
            return view('mahasiswa.manajemen.section', compact('title', 'data', 'user', 'departementData','notif','count'));
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
        $this->section->Store([
            'user_id' => $request->user_id,
            'departement_id' => $request->departement_id,
            'nama_section' => $request->section,
        ]);
        return back()->with('sukses', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Section $section)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Section $section)
    {
        //
    }
}
