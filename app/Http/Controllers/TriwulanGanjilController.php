<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Mahasiswa;
use App\Models\Mentor;
use App\Models\NotifMahasiswa;
use App\Models\NotifMentor;
use App\Models\NotifSection;
use App\Models\TriwulanGanjil;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Faker\Factory as Faker;

class TriwulanGanjilController extends Controller
{
    protected $triwulanGanjil;
    protected $notifMentor;
    protected $notifMahasiswa;
    protected $notifSection;
    public function __construct(TriwulanGanjil $triwulanGanjil,NotifMentor $notifMentor, NotifMahasiswa $notifMahasiswa,NotifSection $notifSection)
    {
        $this->triwulanGanjil = $triwulanGanjil;
        $this->notifMentor=$notifMentor;
        $this->notifMahasiswa=$notifMahasiswa;
        $this->notifSection=$notifSection;
    }
    public function index()
    {
        $title = 'Triwulan';
        if (Auth::user()->role == 'mentor') {
            $data = $this->triwulanGanjil->ShowMentor();
            $mentor_id = Mentor::where('user_id', Auth::user()->id)->value('id');
            $mahasiswa = Mahasiswa::where('mentor_id', $mentor_id)->latest()->get();
            $notif= $this->notifMentor->Show();
            $count = $this->notifMentor->Count();
            return view('mentor.logbook.triwulan-ganjil', compact('title', 'data', 'mahasiswa','notif','count'));
        } elseif (Auth::user()->role == 'mahasiswa') {
            $data = $this->triwulanGanjil->ShowMahasiswa();
            $notif = $this->notifMahasiswa->Show();
            $count = $this->notifMahasiswa->Count();
            return view('mahasiswa.logbook.triwulan-ganjil', compact('title', 'data','notif','count'));
        } elseif (Auth::user()->role == 'section') {
            $data = $this->triwulanGanjil->ShowSection();
            $notif = $this->notifSection->Show();
            $count = $this->notifSection->Count();
            return view('section.logbook.triwulan-ganjil', compact('title', 'data','notif','count'));
        } elseif(Auth::user()->role == 'dosen'){
            return view('dosen.logbook.triwulan-ganjil',[
                'title'=>$title,
                'data'=>$this->triwulanGanjil->ShowDosen()
            ]);
        }elseif (Auth::user()->role == 'departement'){
            return view('departement.logbook.triwulan-ganjil',[
                'title'=>$title,
                'data'=>$this->triwulanGanjil->ShowDepartement()
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
        $mentor_id = Mentor::where('user_id', Auth::user()->id)->first();
        $this->triwulanGanjil->Store([
            'mahasiswa_id' => $request->mahasiswa_id,
            'mentor_id' => $mentor_id->id,
            'section_id' => $mentor_id->section_id,
            'departement_id' => $mentor_id->departement_id,
            'periode' => $request->periode,
            'actual_safety' => $request->actual_safety,
            'actual_quality' => $request->actual_quality,
            'actual_productivity' => $request->actual_productivity,
            'actual_cost' => $request->actual_cost,
            'actual_moral' => $request->actual_moral,
            'actual_lima_r' => $request->actual_lima_r,
            'remarks_safety' => $request->remarks_safety,
            'remarks_quality' => $request->remarks_quality,
            'remarks_productivity' => $request->remarks_productivity,
            'remarks_cost' => $request->remarks_cost,
            'remarks_moral' => $request->remarks_moral,
            'remarks_lima_r' => $request->remarks_lima_r,
            'range' => $request->range,
            'strong' => $request->strong,
            'weakness' => $request->weakness,
            'skill' => $request->skill,
            'knowledge' => $request->knowledge
        ]);
        return back()->with('sukses', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = TriwulanGanjil::where('id', $id)->get();
        $pdf = Pdf::loadView('cetak.triwulan-ganjil', compact('data'));
        $pdf->setPaper('A4', 'portrait');
        return $pdf->stream(Faker::create()->randomNumber(5, true) . '-triwulan-ganjil.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->role == 'mentor') {
            $this->triwulanGanjil->Edit($id, [
                'actual_safety' => $request->actual_safety,
                'actual_quality' => $request->actual_quality,
                'actual_productivity' => $request->actual_productivity,
                'actual_cost' => $request->actual_cost,
                'actual_moral' => $request->actual_moral,
                'actual_lima_r' => $request->actual_lima_r,
                'remarks_safety' => $request->remarks_safety,
                'remarks_quality' => $request->remarks_quality,
                'remarks_productivity' => $request->remarks_productivity,
                'remarks_cost' => $request->remarks_cost,
                'remarks_moral' => $request->remarks_moral,
                'remarks_lima_r' => $request->remarks_lima_r,
                'range' => $request->range,
                'strong' => $request->strong,
                'weakness' => $request->weakness,
                'skill' => $request->skill,
                'knowledge' => $request->knowledge
            ]);
            return redirect('mentor/logbook/triwulan-ganjil')->with('sukses', 'Data berhasil diubah');
        } elseif (Auth::user()->role == 'section') {
            $this->triwulanGanjil->Edit($id, [
                'status' => $request->status
            ]);
            return redirect('section/logbook/triwulan-ganjil')->with('sukses', 'Data berhasil diubah');
        } elseif (Auth::user()->role == 'departement') {
            $this->triwulanGanjil->Edit($id, [
                'status' => $request->status
            ]);
            return redirect('departement/logbook/triwulan-ganjil')->with('sukses', 'Data berhasil diubah');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->triwulanGanjil->Hapus($id);
        return redirect('mentor/logbook/triwulan-ganjil')->with('sukses', 'Data berhasil dihapus');
    }
    public function search(Request $request){
        $title = 'Triwulan';
        $keyword = $request->cari;
        if (Auth::user()->role == 'mahasiswa') {
        $mahasiswa_id = Mahasiswa::where('user_id', Auth::user()->id)->value('id');
        return view('mahasiswa.logbook.triwulan-ganjil',[
            'title'=>$title,
            'data'=> TriwulanGanjil::where('mahasiswa_id', $mahasiswa_id)
            ->where(function ($query) use ($keyword) {
                $query->where('status', 'LIKE', "%$keyword%");
            })
            ->paginate(10),
            'notif'=>$this->notifMahasiswa->Show(),
            'count'=>$this->notifMahasiswa->Count()
        ]);
        } elseif (Auth::user()->role == 'mentor') {
            $mentor_id = Mentor::where('user_id', Auth::user()->id)->value('id');
            return view('mahasiswa.logbook.triwulan-ganjil',[
                'title'=>$title,
                'data'=> TriwulanGanjil::where('mentor_id', $mentor_id)
                ->where(function ($query) use ($keyword) {
                    $query->where('status', 'LIKE', "%$keyword%");
                })
                ->paginate(10),
                'notif'=>$this->notifMentor->Show(),
                'count'=>$this->notifMentor->Count()
            ]);
        }
        
    }
    public function test(){
        return view('cetak.evaluasi-ganjil');
    }
}
