<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Dosen;
use App\Models\LogbookMingguan;
use App\Models\Mahasiswa;
use App\Models\Mentor;
use App\Models\Section;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    protected $mahasiswa;
    protected $dosen;
    protected $mentor;
    public function __construct(Mahasiswa $mahasiswa, Dosen $dosen, Mentor $mentor)
    {
        $this->mahasiswa = $mahasiswa;
        $this->dosen = $dosen;
        $this->mentor = $mentor;
    }
    public function admin()
    {
        $title = 'Dashboard';
        return view('admin.index', compact('title'));
    }
    public function mahasiswa()
    {
        $title = 'Dashboard';
        $mahasiswa = Mahasiswa::where('user_id', Auth::user()->id)->first();
        $dosen = Dosen::latest()->get();
        $mentor = Mentor::latest()->get();
        if ($mahasiswa != null) {
            $absensi = Absensi::where('mahasiswa_id', $mahasiswa->id)->count();
            $logbook = LogbookMingguan::where('mahasiswa_id', $mahasiswa->id)->count();
            $janabs = Absensi::where('keterangan', 'masuk')
                ->where('mahasiswa_id', $mahasiswa->id) // Ubah $mahasiswa->id sesuai dengan pengambilan data mahasiswa Anda
                ->whereMonth('created_at', 1)
                ->count();

            $febabs = Absensi::where('keterangan', 'masuk')
                ->where('mahasiswa_id', $mahasiswa->id)
                ->whereMonth('created_at', 2)
                ->count();

            $marabs = Absensi::where('keterangan', 'masuk')
                ->where('mahasiswa_id', $mahasiswa->id)
                ->whereMonth('created_at', 3)
                ->count();

            $aprabs = Absensi::where('keterangan', 'masuk')
                ->where('mahasiswa_id', $mahasiswa->id)
                ->whereMonth('created_at', 4)
                ->count();

            $meiabs = Absensi::where('keterangan', 'masuk')
                ->where('mahasiswa_id', $mahasiswa->id)
                ->whereMonth('created_at', 5)
                ->count();

            $junabs = Absensi::where('keterangan', 'masuk')
                ->where('mahasiswa_id', $mahasiswa->id)
                ->whereMonth('created_at', 6)
                ->count();

            $julabs = Absensi::where('keterangan', 'masuk')
                ->where('mahasiswa_id', $mahasiswa->id)
                ->whereMonth('created_at', 7)
                ->count();

            $agusabs = Absensi::where('keterangan', 'masuk')
                ->where('mahasiswa_id', $mahasiswa->id)
                ->whereMonth('created_at', 8)
                ->count();

            $sepabs = Absensi::where('keterangan', 'masuk')
                ->where('mahasiswa_id', $mahasiswa->id)
                ->whereMonth('created_at', 9)
                ->count();

            $oktabs = Absensi::where('keterangan', 'masuk')
                ->where('mahasiswa_id', $mahasiswa->id)
                ->whereMonth('created_at', 10)
                ->count();

            $novabs = Absensi::where('keterangan', 'masuk')
                ->where('mahasiswa_id', $mahasiswa->id)
                ->whereMonth('created_at', 11)
                ->count();

            $desabs = Absensi::where('keterangan', 'masuk')
                ->where('mahasiswa_id', $mahasiswa->id)
                ->whereMonth('created_at', 12)
                ->count();
        }

        if ($mahasiswa != null) {
            return view('mahasiswa.index', compact('title', 'mahasiswa', 'absensi', 'logbook', 'janabs', 'febabs', 'marabs', 'aprabs', 'meiabs', 'junabs', 'julabs', 'agusabs', 'sepabs', 'oktabs', 'novabs', 'desabs'));
        } else {
            return view('mahasiswa.index', compact('title', 'mahasiswa','mentor','dosen'));
        }

    }
    public function dosen(){
        $title = 'Dashboard';
        return view('dosen.index',compact('title'));
    }
    public function mentor()
    {
        $title = 'Dashboard';
        $mentor_id = Mentor::where('user_id',Auth::user()->id)->value('id');
        $mahasiswa = Mahasiswa::where('mentor_id',$mentor_id)->count();
        $logbook = LogbookMingguan::where('mentor_id',$mentor_id)->count();
        $absensi = Absensi::where('mentor_id', $mentor_id)->count();
            $logbook = LogbookMingguan::where('mentor_id', $mentor_id)->count();
            $janabs = Absensi::where('keterangan', 'masuk')
                ->where('mentor_id', $mentor_id) // Ubah $mentor_id sesuai dengan pengambilan data mahasiswa Anda
                ->whereMonth('created_at', 1)
                ->count();

            $febabs = Absensi::where('keterangan', 'masuk')
                ->where('mentor_id', $mentor_id)
                ->whereMonth('created_at', 2)
                ->count();

            $marabs = Absensi::where('keterangan', 'masuk')
                ->where('mentor_id', $mentor_id)
                ->whereMonth('created_at', 3)
                ->count();

            $aprabs = Absensi::where('keterangan', 'masuk')
                ->where('mentor_id', $mentor_id)
                ->whereMonth('created_at', 4)
                ->count();

            $meiabs = Absensi::where('keterangan', 'masuk')
                ->where('mentor_id', $mentor_id)
                ->whereMonth('created_at', 5)
                ->count();

            $junabs = Absensi::where('keterangan', 'masuk')
                ->where('mentor_id', $mentor_id)
                ->whereMonth('created_at', 6)
                ->count();

            $julabs = Absensi::where('keterangan', 'masuk')
                ->where('mentor_id', $mentor_id)
                ->whereMonth('created_at', 7)
                ->count();

            $agusabs = Absensi::where('keterangan', 'masuk')
                ->where('mentor_id', $mentor_id)
                ->whereMonth('created_at', 8)
                ->count();

            $sepabs = Absensi::where('keterangan', 'masuk')
                ->where('mentor_id', $mentor_id)
                ->whereMonth('created_at', 9)
                ->count();

            $oktabs = Absensi::where('keterangan', 'masuk')
                ->where('mentor_id', $mentor_id)
                ->whereMonth('created_at', 10)
                ->count();

            $novabs = Absensi::where('keterangan', 'masuk')
                ->where('mentor_id', $mentor_id)
                ->whereMonth('created_at', 11)
                ->count();

            $desabs = Absensi::where('keterangan', 'masuk')
                ->where('mentor_id', $mentor_id)
                ->whereMonth('created_at', 12)
                ->count();
        return view('mentor.index', compact('title','mahasiswa','absensi', 'logbook', 'janabs', 'febabs', 'marabs', 'aprabs', 'meiabs', 'junabs', 'julabs', 'agusabs', 'sepabs', 'oktabs', 'novabs', 'desabs'));
    }
    public function section()
    {
        $title = 'Dashboard';
        return view('section.index', compact('title'));
    }
    public function departement(){
        return view('departement.index',[
            'title'=>'Dashboard'
        ]);
    }
    public function profil($id)
    {
        $title = 'Profil';
        $user_id = User::find($id)->value('id');
        if (Auth::user()->role == 'admin') {

        } elseif (Auth::user()->role == 'dosen') {

        } elseif (Auth::user()->role == 'departement') {

        } elseif (Auth::user()->role == 'mahasiswa') {
            $dataDosen = Dosen::latest()->get();
            $dataMentor = Mentor::latest()->get();
            $data = $this->mahasiswa->ShowProfil($id);
            return view('mahasiswa.profil', compact('title', 'data', 'dataDosen', 'dataMentor'));
        } elseif (Auth::user()->role == 'mentor') {
            return view('mentor.profil',[
                'title'=>$title,
                'data'=>Mentor::with('user','section','departement')->where('user_id',$user_id)->first()
            ]);
        } elseif (Auth::user()->role == 'section') {

        }
    }
    public function postProfil(Request $request)
    {
        if (Auth::user()->role == 'mahasiswa') {
            $this->mahasiswa->Store([
                'user_id' => Auth::user()->id,
                'dosen_id' => $request->dosen_id,
                'mentor_id' => $request->mentor_id,
                'no_reg' => $request->no_reg,
                'batch' => $request->batch,
                'shift' => $request->shift
            ]);
            return redirect('mahasiswa/profil/' . Auth::user()->id)->with('sukses', 'Data berhasil ditambahkan');
        } elseif (Auth::user()->role == 'dosen') {

        }
    }
    public function profilMentor(Request $request, $id)
    {
    
        // Ambil data dari request
        $dataUser = [
            'nama' => $request->nama,
        ];
    
        $dataMentor = [
            'no_telp' => $request->no_telp,
            'divisi' => $request->divisi,
            'shop' => $request->shop,
            'line' => $request->line,
            'pos' => $request->pos,
            'nama_gl' => $request->nama_gl,
        ];
    
        // Handle foto profil jika diunggah
        if ($request->hasFile('photo')) {
            $profil = $request->file('photo');
            $namaProfil = $profil->hashName();
            $profil->move(public_path('profil'), $namaProfil);
            $dataUser['photo'] = $namaProfil;
        }
    
        // Handle paraf jika diunggah
        if ($request->hasFile('paraf')) {
            $paraf = $request->file('paraf');
            $namaParaf = $paraf->hashName();
            $paraf->move(public_path('paraf'), $namaParaf);
            $dataMentor['paraf'] = $namaParaf;
        }
    
        // Update data user dan mentor
        User::find($id)->update($dataUser);
        Mentor::where('user_id', $id)->update($dataMentor);
    
        return redirect('mentor/profil/'.$id)->with('sukses', 'Data berhasil diubah');
    }
    public function profilMahasiswa(Request $request, $id)
    {
    
        // Ambil data dari request
        $dataUser = [
            'nama' => $request->nama,
        ];
    
        $dataMahasiswa = [
            'dosen_id'=>$request->dosen_id,
            'no_reg' => $request->no_reg,
            'batch' => $request->batch,
            'shift' => $request->shift
        ];
    
        // Handle foto profil jika diunggah
        if ($request->hasFile('photo')) {
            $profil = $request->file('photo');
            $namaProfil = $profil->hashName();
            $profil->move(public_path('profil'), $namaProfil);
            $dataUser['photo'] = $namaProfil;
        }
    
        // Update data user dan mentor
        User::find($id)->update($dataUser);
        Mahasiswa::where('user_id', $id)->update($dataMahasiswa);
    
        return redirect('mahasiswa/profil/'.$id)->with('sukses', 'Data berhasil diubah');
    }
}