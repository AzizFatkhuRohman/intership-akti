<?php

namespace App\Http\Controllers;

use App\Models\EvaluasiGenap;
use App\Models\Mahasiswa;
use App\Models\Mentor;
use App\Models\NotifMahasiswa;
use App\Models\NotifMentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvaluasiGenapController extends Controller
{
    protected $evaluasiGenap;
    protected $notifMahasiswa;
    protected $notifMentor;
    public function __construct(EvaluasiGenap $evaluasiGenap,NotifMahasiswa $notifMahasiswa, NotifMentor $notifMentor){
        $this->evaluasiGenap=$evaluasiGenap;
        $this->notifMahasiswa=$notifMahasiswa;
        $this->notifMentor=$notifMentor;
    }
    public function index()
    {
        $title = "Evaluasi Bulanan Genap";
        if (Auth::user()->role == 'mentor') {
            $mentor_id = Mentor::where('user_id',Auth::user()->id)->value('id');
            return view('mentor.logbook.bulanan-genap',[
                'title'=>$title,
                'mahasiswa'=>Mahasiswa::where('mentor_id',$mentor_id)->latest()->get(),
                'data'=>$this->evaluasiGenap->Show()
            ]);
        } elseif(Auth::user()->role == 'section') {
            return view('section.logbook.bulanan-genap',[
                'title'=>$title,
                'data'=>$this->evaluasiGenap->Show()
            ]);
        }elseif(Auth::user()->role == 'departement'){
            return view('departement.logbook.bulanan-genap',[
                'title'=>$title,
                'data'=>$this->evaluasiGenap->Show()
            ]);
        }elseif(Auth::user()->role == 'mahasiswa'){
            return view('mahasiswa.logbook.bulanan-ganjil',[
                'title'=>$title,
                'data'=>$this->evaluasiGenap->Show(),
                'notif'=>$this->notifMahasiswa->Show(),
                'count'=>$this->notifMahasiswa->Count()
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
        $mentor_id = Mentor::where('user_id',Auth::user()->id)->first();
        $this->evaluasiGenap->Store([
            'mahasiswa_id'=>$request->mahasiswa_id,
            'mentor_id'=>$mentor_id->id,
            'section_id'=>$mentor_id->section_id,
            'departement_id'=>$mentor_id->departement_id,
            //Kesehatan
            'kesehatan_1'=>$request->kesehatan_1,
            'kesehatan_2'=>$request->kesehatan_2,
            'kesehatan_3'=>$request->kesehatan_3,
            'kesehatan_4'=>$request->kesehatan_4,
            'kesehatan_5'=>$request->kesehatan_5,
            //safety
            'accident_1'=>$request->accident_1,
            'accident_2'=>$request->accident_2,
            //Apd
            'apd_1'=>$request->apd_1,
            'apd_2'=>$request->apd_2,
            //SPC
            'spc_1'=>$request->spc_1,
            'spc_2'=>$request->spc_2,
            //SCW
            'scw_1'=>$request->scw_1,
            'scw_2'=>$request->scw_2,

            'kyt_1'=>$request->kyt_1,
            'kyt_2'=>$request->kyt_2,
            //Safety ky
            'safety_ky_1'=>$request->safety_ky_1,
            'safety_ky_2'=>$request->safety_ky_2,
            //Safety Idea
            'safety_idea_1'=>$request->safety_idea_1,
            'safety_idea_2'=>$request->safety_idea_2,
            //Data Defect
            'biq_1'=>$request->biq_1,
            'biq_2'=>$request->biq_2,
            'biq_3'=>$request->biq_3,
            //DIV
            'div_1'=>$request->div_1,
            'div_2'=>$request->div_2,

            'customer_1'=>$request->customer_1,
            'customer_2'=>$request->customer_2,

            'analisa_1'=>$request->analisa_1,
            'analisa_2'=>$request->analisa_2,
            'analisa_3'=>$request->analisa_3,

            'reporting_1'=>$request->reporting_1,
            'reporting_2'=>$request->reporting_2,

            'job_1'=>$request->job_1,
            'job_2'=>$request->job_2,
            'job_3'=>$request->job_3,

            'kerja_1'=>$request->kerja_1,
            'kerja_2'=>$request->kerja_2,
            'kerja_3'=>$request->kerja_3,
            'kerja_4'=>$request->kerja_4,
            'kerja_5'=>$request->kerja_5,
            'kerja_6'=>$request->kerja_6,
            'kerja_7'=>$request->kerja_7,
            'kerja_8'=>$request->kerja_8,
            'kerja_9'=>$request->kerja_9,
            'kerja_10'=>$request->kerja_10,
            'kerja_11'=>$request->kerja_11,
            'kerja_12'=>$request->kerja_12,
            'kerja_13'=>$request->kerja_13,
            'kerja_14'=>$request->kerja_14,

            'tpm_1'=>$request->tpm_1,
            'tpm_2'=>$request->tpm_2,
            'tpm_3'=>$request->tpm_3,

            'line_1'=>$request->line_1,
            'line_2'=>$request->line_2,
            'line_3'=>$request->line_3,

            'repair_1'=>$request->repair_1,
            'repair_2'=>$request->repair_2,
            'repair_3'=>$request->repair_3,

            'indirect_1'=>$request->indirect_1,
            'indirect_2'=>$request->indirect_2,

            'direct_1'=>$request->direct_1,
            'direct_2'=>$request->direct_2,

            'abnormality_1'=>$request->abnormality_1,
            'abnormality_2'=>$request->abnormality_2,

            'kehadiran_1'=>$request->kehadiran_1,
            'kehadiran_2'=>$request->kehadiran_2,

            'inisiatif_1'=>$request->inisiatif_1,
            'inisiatif_2'=>$request->inisiatif_2,
            'inisiatif_3'=>$request->inisiatif_3,

            'disiplin_1'=>$request->disiplin_1,
            'disiplin_2'=>$request->disiplin_2,
            'disiplin_3'=>$request->disiplin_3,
            'disiplin_4'=>$request->disiplin_4,
            'disiplin_5'=>$request->disiplin_5,

            'tanggung_jawab_1'=>$request->tanggung_jawab_1,
            'tanggung_jawab_2'=>$request->tanggung_jawab_2,
            'tanggung_jawab_3'=>$request->tanggung_jawab_3,
            'kerja_sama_1'=>$request->kerja_sama_1,
            'kerja_sama_2'=>$request->kerja_sama_2,
            'kerja_sama_3'=>$request->kerja_sama_3,

            'jkn_1'=>$request->jkn_1,
            'jkn_2'=>$request->jkn_2,
            'lima_r_1'=>$request->lima_r_1,
            'lima_r_2'=>$request->lima_r_2,

            'qcc_1'=>$request->qcc_1,
            'qcc_2'=>$request->qcc_2,

            'idea_1'=>$request->idea_1,
            'idea_2'=>$request->idea_2,
            'gcrc_1'=>$request->gcrc_1,
            'gcrc_2'=>$request->gcrc_2,
            'total_point'=>
            $request->kesehatan_1
            +$request->kesehatan_2
            +$request->kesehatan_3
            +$request->kesehatan_4
            +$request->kesehatan_5
            //safety
            +$request->accident_1+
            $request->accident_2+
            //Apd
            $request->apd_1+
            $request->apd_2+
            //SPC
            $request->spc_1
            +$request->spc_2
            //SCW
            +$request->scw_1
            +$request->scw_2

            +$request->kyt_1
            +$request->kyt_2
            //Safety ky
            +$request->safety_ky_1
            +$request->safety_ky_2
            //Safety Idea
            +$request->safety_idea_1
            +$request->safety_idea_2
            //Data Defect
            +$request->biq_1
            +$request->biq_2
            +$request->biq_3
            //DIV
            +$request->div_1
            +$request->div_2

            +$request->customer_1
            +$request->customer_2

            +$request->analisa_1
            +$request->analisa_2
            +$request->analisa_3

            +$request->reporting_1
            +$request->reporting_2

            +$request->job_1
            +$request->job_2
            +$request->job_3

            +$request->kerja_1
            +$request->kerja_2
            +$request->kerja_3
            +$request->kerja_4
            +$request->kerja_5
            +$request->kerja_6
            +$request->kerja_7
            +$request->kerja_8
            +$request->kerja_9
            +$request->kerja_10
            +$request->kerja_11
            +$request->kerja_12
            +$request->kerja_13
            +$request->kerja_14

            +$request->tpm_1
            +$request->tpm_2
            +$request->tpm_3

            +$request->line_1
            +$request->line_2
            +$request->line_3

            +$request->repair_1
            +$request->repair_2
            +$request->repair_3

            +$request->indirect_1
            +$request->indirect_2

            +$request->direct_1
            +$request->direct_2

            +$request->abnormality_1
            +$request->abnormality_2

            +$request->kehadiran_1
            +$request->kehadiran_2

            +$request->inisiatif_1
            +$request->inisiatif_2
            +$request->inisiatif_3

            +$request->disiplin_1
            +$request->disiplin_2
            +$request->disiplin_3
            +$request->disiplin_4
            +$request->disiplin_5

            +$request->tanggung_jawab_1
            +$request->tanggung_jawab_2
            +$request->tanggung_jawab_3
            +$request->kerja_sama_1+$request->kerja_sama_2+$request->kerja_sama_3

            +$request->jkn_1
            +$request->jkn_2
            +$request->lima_r_1
            +$request->lima_r_2

            +$request->qcc_1
            +$request->qcc_2

            +$request->idea_1
            +$request->idea_2
            +$request->gcrc_1
            +$request->gcrc_2
        ]);
        return back()->with('sukses','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(EvaluasiGenap $evaluasiGenap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EvaluasiGenap $evaluasiGenap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->role == 'section') {
            $this->evaluasiGenap->Edit($id,[
                'status'=>$request->status
            ]);
            return redirect('section/logbook/bulanan-genap')->with('sukses','Data berhasil diubah');
        } else {
            # code...
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluasiGenap $evaluasiGenap)
    {
        //
    }
}
