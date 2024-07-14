<?php

namespace App\Http\Controllers;

use App\Models\EvaluasiGanjil;
use App\Models\Mahasiswa;
use App\Models\Mentor;
use App\Models\NotifMahasiswa;
use App\Models\NotifMentor;
use App\Models\NotifSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvaluasiGanjilController extends Controller
{
    protected $evaluasiGanjil;
    protected $notifMentor;
    protected $notifMahasiswa;
    protected $notifSection;
    public function __construct(EvaluasiGanjil $evaluasiGanjil,NotifMentor $notifMentor, NotifMahasiswa $notifMahasiswa, NotifSection $notifSection){
        $this->evaluasiGanjil=$evaluasiGanjil;
        $this->notifMentor=$notifMentor;
        $this->notifMahasiswa=$notifMahasiswa;
        $this->notifSection=$notifSection;
    }
    public function index()
    {
        $title = 'Evaluasi Bulanan Ganjil';
        if (Auth::user()->role == 'mentor') {
        $mentor_id = Mentor::where('user_id',Auth::user()->id)->value('id');
        return view('mentor.logbook.bulanan-ganjil',[
                'title'=>$title,
                'mahasiswa'=>Mahasiswa::where('mentor_id',$mentor_id)->latest()->get(),
                'data'=>$this->evaluasiGanjil->Show(),
                'notif'=>$this->notifMentor->Show(),
                'count'=>$this->notifMentor->Count()
            ]);
        } elseif(Auth::user()->role == 'section') {
        return view('section.logbook.bulanan-ganjil',[
            'title'=>$title,
            'data'=>$this->evaluasiGanjil->Show()
        ]);
        } elseif(Auth::user()->role == 'mahasiswa'){
            return view('mahasiswa.logbook.bulanan-ganjil',[
                'title'=>$title,
                'data'=>$this->evaluasiGanjil->Show(),
                'notif'=>$this->notifMahasiswa->Show(),
                'count'=>$this->notifMahasiswa->Count()
            ]);
        } elseif(Auth::user()->role == 'departement'){
            return view('departement.logbook.bulanan-ganjil',[
                'title'=>$title,
                'data'=>$this->evaluasiGanjil->Show()
            ]);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mentor_id = Mentor::where('user_id',Auth::user()->id)->first();
        $this->evaluasiGanjil->Store([
            'mahasiswa_id'=>$request->mahasiswa_id,
            'mentor_id'=>$mentor_id->id,
            'section_id'=>$mentor_id->section_id,
            'departement_id'=>$mentor_id->departement_id,
            'kesehatan'=>$request->kesehatan,
            'safety_accident'=>$request->safety_accident,
            'apd'=>$request->apd,
            'spc'=>$request->spc,
            'scw'=>$request->scw,
            'kyt'=>$request->kyt,
            'safety_ability'=>$request->safety_ability,
            'safety_idea'=>$request->safety_idea,
            'biq'=>$request->biq,
            'div'=>$request->div,
            'customer'=>$request->customer,
            'analisa'=>$request->analisa,
            'reporting'=>$request->reporting,
            'job'=>$request->job,
            'motivasi'=>$request->motivasi,
            'penyelesaian'=>$request->penyelesaian,
            'karakteristik'=>$request->karakteristik,
            'tpm'=>$request->tpm,
            'line'=>$request->line,
            'repair'=>$request->repair,
            'indirect'=>$request->indirect,
            'direct'=>$request->direct,
            'abnormality'=>$request->abnormality,
            'kehadiran'=>$request->kehadiran,
            'mindset'=>$request->mindset,
            'pribadi'=>$request->pribadi,
            'jkn'=>$request->jkn,
            'lima_r'=>$request->lima_r,
            'qcc'=>$request->qcc,
            'idea'=>$request->idea,
            'tji'=>$request->tji,
            'total_point'=>
            $request->kesehatan+
            $request->safety_accident+
            $request->apd+
            $request->spc+
            $request->scw+
            $request->kyt+
            $request->safety_ability+
            $request->safety_idea+
            $request->biq+
            $request->div+
            $request->customer+
            $request->analisa+
            $request->reporting+
            $request->job+
            $request->movitasi+
            $request->penyelesaian+
            $request->karakteristik+
            $request->tpm+
            $request->line+
            $request->repair+
            $request->indirect+
            $request->direct+
            $request->abnormality+
            $request->kehadiran+
            $request->mindset+
            $request->pribadi+
            $request->jkn+
            $request->lima_r+
            $request->qcc+
            $request->idea+
            $request->tji
        ]);
        $this->notifMahasiswa->Store([
            'mahasiswa_id'=>$request->mahasiswa_id,
            'mentor_id'=>$mentor_id->id,
            'content'=>'Evaluasi bulanan ganjil dibuat'
        ]);
        $this->notifSection->Store([
            'mentor_id'=>$mentor_id->id,
            'section_id'=>$mentor_id->section_id,
            'departement_id'=>$mentor_id->departement_id,
            'content'=>'Evaluasi bulanan ganjil dibuat oleh '.Auth::user()->nama
        ]);
        return back()->with('sukses','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(EvaluasiGanjil $evaluasiGanjil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->role == 'section') {
            $this->evaluasiGanjil->Edit($id,[
                'status'=>$request->status
            ]);
            return redirect('section/logbook/bulanan-ganjil')->with('sukses','Data berhasil diubah');
        } else {
            # code...
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluasiGanjil $evaluasiGanjil)
    {
        //
    }
}
