<?php

namespace App\Http\Controllers;

use App\Models\LogbookMingguan;
use App\Models\Mahasiswa;
use App\Models\Mentor;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Faker\Factory as Faker;

class LogbookMingguanController extends Controller
{
    protected $logbookMingguan;
    public function __construct(LogbookMingguan $logbookMingguan)
    {
        $this->logbookMingguan = $logbookMingguan;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Logbook Mingguan';
        if (Auth::user()->role == 'admin') {

        } elseif (Auth::user()->role == 'dosen') {
            return view('dosen.logbook.mingguan',[
                'title'=>$title,
                'data'=>$this->logbookMingguan->ShowDosen()
            ]);
        } elseif (Auth::user()->role == 'departement') {
            return view('departement.logbook.mingguan',[
                'title'=>$title,
                'data'=>$this->logbookMingguan->ShowDepartement()
            ]);
        } elseif (Auth::user()->role == 'mahasiswa') {
            $data = $this->logbookMingguan->ShowMahasiswa();
            return view('mahasiswa.logbook.mingguan', compact('title', 'data'));
        } elseif (Auth::user()->role == 'mentor') {
            $data = $this->logbookMingguan->ShowMentor();
            return view('mentor.logbook.mingguan', compact('title', 'data'));
        } elseif (Auth::user()->role == 'section') {
            $data = $this->logbookMingguan->ShowSection();
            return view('section.logbook.mingguan', compact('title', 'data'));
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mahasiswa_id = Mahasiswa::where('user_id', Auth::user()->id)->first();
        if (!$request->gambar) {
            $this->logbookMingguan->Store([
                'mahasiswa_id' => $mahasiswa_id->id,
                'mentor_id'=>$mahasiswa_id->mentor_id,
                'section_id'=>$mahasiswa_id->section_id,
                'departement_id'=>$mahasiswa_id->departement_id,
                'minggu' => $request->minggu,
                'bulan' => $request->bulan,
                'keterangan' => $request->keterangan,
                'tool_used' => $request->tool_used,
                'safety_key_point' => $request->safety_key_point,
                'problem_solf' => $request->problem_solf,
                'hyarihatto' => $request->hyarihatto
            ]);
        } else {
            $gambar = $request->file('gambar');
            $namagambar = $gambar->getClientOriginalName();
            $gambar->move(public_path('logbook_mingguan'), $namagambar);
            $this->logbookMingguan->Store([
                'mahasiswa_id' => $mahasiswa_id->id,
                'mentor_id'=>$mahasiswa_id->mentor_id,
                'section_id'=>$mahasiswa_id->section_id,
                'departement_id'=>$mahasiswa_id->departement_id,
                'minggu' => $request->minggu,
                'bulan' => $request->bulan,
                'gambar' => $namagambar,
                'keterangan' => $request->keterangan,
                'tool_used' => $request->tool_used,
                'safety_key_point' => $request->safety_key_point,
                'problem_solf' => $request->problem_solf,
                'hyarihatto' => $request->hyarihatto
            ]);
        }
        return back()->with('sukses', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = LogbookMingguan::where('id',$id)->get();
        $pdf = Pdf::loadView('cetak.mingguan',compact('data'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream( Faker::create()->randomNumber(5, true). '-logbook-mingguan.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LogbookMingguan $logbookMingguan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        if (Auth::user()->role == 'mentor') {
            $this->logbookMingguan->Edit($id, [
                'point_to_remember' => $request->point_to_remember,
                'status' => $request->status,
                'self_evaluation' => $request->self_evaluation,
                'komentar' => $request->komentar
            ]);
        } elseif (Auth::user()->role == 'mahasiswa') {
            if (!$request->gambar) {
                $this->logbookMingguan->Edit($id, [
                    'minggu' => $request->minggu,
                    'bulan' => $request->bulan,
                    'keterangan' => $request->keterangan,
                    'tool_used' => $request->tool_used,
                    'safety_key_point' => $request->safety_key_point,
                    'problem_solf' => $request->problem_solf,
                    'hyarihatto' => $request->hyarihatto
                ]);
            } else {
                $gambar = $request->file('gambar');
                $namagambar = $gambar->getClientOriginalName();
                $gambar->move(public_path('logbook_mingguan'), $namagambar);
                $this->logbookMingguan->Edit($id, [
                    'minggu' => $request->minggu,
                    'bulan' => $request->bulan,
                    'gambar' => $namagambar,
                    'keterangan' => $request->keterangan,
                    'tool_used' => $request->tool_used,
                    'safety_key_point' => $request->safety_key_point,
                    'problem_solf' => $request->problem_solf,
                    'hyarihatto' => $request->hyarihatto
                ]);
            }
        }

        return back()->with('sukses', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LogbookMingguan $logbookMingguan)
    {
        //
    }
    public function search(Request $request){
        $title = 'Logbook Mingguan';
        $keyword = $request->cari;
        if (Auth::user()->role == 'mahasiswa') {
        $mahasiswa_id = Mahasiswa::where('user_id', Auth::user()->id)->value('id');
        return view('mahasiswa.logbook.mingguan',[
            'title'=>$title,
            'data'=> LogbookMingguan::where('mahasiswa_id', $mahasiswa_id)
            ->where(function ($query) use ($keyword) {
                $query->where('bulan', 'LIKE', "%$keyword%")
                ->orWhere('minggu', 'LIKE', "%$keyword%")
                      ->orWhere('status', 'LIKE', "%$keyword%");
            })
            ->paginate(10)
        ]);
        } elseif (Auth::user()->role == 'mentor') {
            $mentor_id = Mentor::where('user_id', Auth::user()->id)->value('id');
            return view('mentor.logbook.mingguan',[
                'title'=>$title,
                'data'=> LogbookMingguan::where('mentor_id', $mentor_id)
                ->where(function ($query) use ($keyword) {
                    $query->where('bulan', 'LIKE', "%$keyword%")
                    ->orWhere('minggu', 'LIKE', "%$keyword%")
                          ->orWhere('status', 'LIKE', "%$keyword%");
                })
                ->paginate(10)
            ]);
        }
        
    }
}
