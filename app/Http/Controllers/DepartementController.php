<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartementController extends Controller
{
    protected $departement;
    public function __construct(Departement $departement)
    {
        $this->departement = $departement;
    }
    public function index()
    {
        $title = 'Departement';
        $user = User::where('role', 'departement')->orderBy('nama', 'desc')->get();
        $data = $this->departement->ShowAdmin();
        if (Auth::user()->role == 'admin') {
            return view('admin.manajemen.departement', compact('title', 'data', 'user'));
        } elseif (Auth::user()->role == 'mahasiswa') {
            return view('mahasiswa.manajemen.departement', compact('title', 'data', 'user'));
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
        $this->departement->Store([
            'user_id' => $request->user_id,
            'nama_departement' => $request->departement,
            'lokasi' => $request->lokasi
        ]);
        return back()->with('sukses', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Departement $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departement $departement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departement $departement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    {
        //
    }
}
