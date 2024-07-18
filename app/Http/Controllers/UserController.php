<?php

namespace App\Http\Controllers;

use App\Models\NotifAdmin;
use App\Models\NotifMahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    protected $user;
    protected $notifMahasiswa;
    protected $notifAdmin;
    public function __construct(User $user,NotifMahasiswa $notifMahasiswa,NotifAdmin $notifAdmin)
    {
        $this->user = $user;
        $this->notifMahasiswa=$notifMahasiswa;
        $this->notifAdmin=$notifAdmin;
    }

    public function login()
    {
        return view('auth.login');
    }
    public function attempLogin(Request $request)
    {
        if (Auth::attempt(['nomor_induk' => $request->nomor_induk, 'password' => $request->password])) {
            // Periksa peran pengguna setelah berhasil login
            if (Auth::user()->role == 'admin') {
                return redirect()->intended('/admin/dashboard')->with('sukses', 'Berhasil Login');
            } elseif (Auth::user()->role == 'dosen') {
                return redirect()->intended('/dosen/dashboard')->with('sukses', 'Berhasil Login');
            } elseif (Auth::user()->role == 'departement') {
                return redirect()->intended('/departement/dashboard')->with('sukses', 'Berhasil Login');
            } elseif (Auth::user()->role == 'mahasiswa') {
                return redirect()->intended('/mahasiswa/dashboard')->with('sukses', 'Berhasil Login');
            } elseif (Auth::user()->role == 'mentor') {
                return redirect()->intended('/mentor/dashboard')->with('sukses', 'Berhasil Login');
            } elseif (Auth::user()->role == 'section') {
                return redirect()->intended('/section/dashboard')->with('sukses', 'Berhasil Login');
            }
        }

        // Jika autentikasi gagal, kembalikan ke halaman login dengan pesan error
        return back()->with('gagal', 'Akun tidak ditemukan');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('sukses', 'Anda berhasil keluar');
    }
    public function lupaPassword(){
        return view('auth.lupa-password');
    }
    public function putPassword(Request $request){
        $nomor_induk = $request->nomor_induk;
        $this->user->lupaPassword($nomor_induk,[
            'password'=>Hash::make($request->password)
        ]);
        return redirect('/')->with('sukses','Data berhasil diubah');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Pengguna';
        if (Auth::user()->role == 'admin') {
            $data = $this->user->ShowAdmin();
            $notif = $this->notifAdmin->Show();
            $count = $this->notifAdmin->Count();
            return view('admin.manajemen.pengguna', compact('title','data','notif','count'));
        } elseif(Auth::user()->role == 'mahasiswa') {
            $data = $this->user->ShowMahasiswa();
            $notif = $this->notifMahasiswa->Show();
            $count = $this->notifMahasiswa->Count();
            return view('mahasiswa.manajemen.pengguna',compact('title','data','notif','count'));
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
        if (!$request->photo) {
            $this->user->Store([
                'nama' => $request->nama,
                'nomor_induk' => $request->nomor_induk,
                'role' => $request->role,
                'password' => Hash::make($request->password)
            ]);
        } else {
            $file = $request->file('photo');
            $namaFile = $file->getClientOriginalName();
            $file->move(public_path('profil'), $namaFile);
            $this->user->Store([
                'nama' => $request->nama,
                'nomor_induk' => $request->nomor_induk,
                'role' => $request->role,
                'photo' => $namaFile,
                'password' => Hash::make($request->password)
            ]);
        }
        return back()->with('sukses', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (!$request->photo) {
            $this->user->Store([
                'nama' => $request->nama,
                'nomor_induk' => $request->nomor_induk,
                'role' => $request->role,
                'password' => Hash::make($request->password)
            ]);
        } else {
            $file = $request->file('photo');
            $namaFile = $file->getClientOriginalName();
            $file->move(public_path('profil'), $namaFile);
            $this->user->Store([
                'nama' => $request->nama,
                'nomor_induk' => $request->nomor_induk,
                'role' => $request->role,
                'photo' => $namaFile,
                'password' => Hash::make($request->password)
            ]);
        }
        return back()->with('sukses', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function search(Request $request){
        $title = 'Pengguna';
        $keyword = $request->cari;
        if (Auth::user()->role = 'mahasiswa') {
        return view('mahasiswa.manajemen.pengguna',[
            'title'=>$title,
            'data'=> User::where('nama', 'LIKE', "%$keyword%")
            ->orWhere('role', 'LIKE', "%$keyword%")
            ->orWhere('nomor_induk', 'LIKE', "%$keyword%")
            ->paginate(10),
            'notif'=> $this->notifMahasiswa->Show(),
            'count'=>$this->notifMahasiswa->Count()
        ]);
        } else {
            # code...
        }
        
    }
}
