<?php

namespace App\Http\Controllers;

use App\Models\EvaluasiGanjil;
use App\Models\Mahasiswa;
use App\Models\Mentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvaluasiGanjilController extends Controller
{
    protected $evaluasiGanjil;
    public function __construct(EvaluasiGanjil $evaluasiGanjil){
        $this->evaluasiGanjil=$evaluasiGanjil;
    }
    public function index()
    {
        $title = 'Evaluasi Bulanan Ganjil';
        if (Auth::user()->role == 'mentor') {
        $mentor_id = Mentor::where('user_id',Auth::user()->id)->value('id');
        return view('mentor.logbook.bulanan-ganjil',[
                'title'=>$title,
                'mahasiswa'=>Mahasiswa::where('mentor_id',$mentor_id)->latest()->get(),
                'data'=>$this->evaluasiGanjil->Show()
            ]);
        } elseif(Auth::user()->role == 'section') {
        return view('section.logbook.bulanan-ganjil',[
            'title'=>$title,
            'data'=>$this->evaluasiGanjil->Show()
        ]);
        } elseif(Auth::user()->role == 'mahasiswa'){
            return view('mahasiswa.logbook.bulanan-ganjil',[
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
            'apd_2'=>$request-> apd_2,
            //SPC
            'spc_1'=>$request->spc_1,
            'spc_2'=>$request-> spc_2,
            //SCW
            'scw_1'=>$request->scw_1,
            'scw_2'=>$request-> scw_2,

            'kyt_1'=>$request->kyt_1,
            'kyt_2'=>$request-> kyt_2,
            //Safety ky
            'safety_ky_1'=>$request->safety_ky_1,
            'safety_ky_2'=>$request-> safety_ky_2,
            'range_safety_ky_1'=>$request->range_safety_ky_1,
            'range_safety_ky_2'=>$request-> range_safety_ky_2,
            'act_safety_ky_1'=>$request->act_safety_ky_1,
            'act_safety_ky_2'=>$request->act_safety_ky_2,
            //Safety Idea
            'safety_idea_1'=>$request->safety_idea_1,
            'safety_idea_2'=>$request->safety_idea_2,
            'range_safety_idea_1'=>$request->range_safety_idea_1,
            'range_safety_idea_2'=>$request->range_safety_idea_2,
            'act_safety_idea_1'=>$request->act_safety_idea_1,
            'act_safety_idea_2'=>$request->act_safety_idea_2,
            //Data Defect
            'biq_1'=>$request->biq_1,
            'biq_2'=>$request->biq_2,
            'biq_3'=>$request->biq_3,
            //DIV
            'div_1'=>$request->div_1,
            'div_2'=>$request->div_2,
            'range_div_1'=>$request->range_div_1,
            'range_div_2'=>$request->range_div_2,
            'act_div_1'=>$request->act_div_1,
            'act_div_2'=>$request->act_div_2,

            'customer_1'=>$request->customer_1,
            'customer_2'=>$request->customer_2,
            'range_customer_1'=>$request->range_customer_1,
            'range_customer_2'=>$request->range_customer_2,
            'act_customer_1'=>$request->act_customer_1,
            'act_customer_2'=>$request->act_customer_2,

            'analisa_1'=>$request->analisa_1,
            'analisa_2'=>$request->analisa_2,
            'analisa_3'=>$request->analisa_3,
            'range_analisa_1'=>$request->range_analisa_1,
            'range_analisa_2'=>$request->range_analisa_2,
            'range_analisa_3'=>$request->range_analisa_3,
            'act_analisa_1'=>$request->act_analisa_1,
            'act_analisa_2'=>$request->act_analisa_2,
            'act_analisa_3'=>$request->act_analisa_3,

            'reporting_1'=>$request->reporting_1,
            'reporting_2'=>$request->reporting_2,
            'range_reporting_1'=>$request->range_reporting_1,
            'range_reporting_2'=>$request->range_reporting_2,
            'act_reporting_1'=>$request->act_reporting_1,
            'act_reporting_2'=>$request->act_reporting_2,

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
            'range_tpm_1'=>$request->range_tpm_1,
            'range_tpm_2'=>$request->range_tpm_1,
            'range_tpm_3'=>$request->range_tpm_1,
            'act_tpm_1'=>$request->act_tpm_1,
            'act_tpm_2'=>$request->act_tpm_2,
            'act_tpm_3'=>$request->act_tpm_3,

            'line_1'=>$request->line_1,
            'line_2'=>$request->line_2,
            'line_3'=>$request->line_3,
            'range_line_1'=>$request->range_line_1,
            'range_line_2'=>$request->range_line_2,
            'range_line_3'=>$request->range_line_3,
            'act_line_1'=>$request->act_line_1,
            'act_line_2'=>$request->act_line_2,
            'act_line_3'=>$request->act_line_3,

            'repair_1'=>$request->repair_1,
            'repair_2'=>$request->repair_2,
            'repair_3'=>$request->repair_3,
            'range_repair_1'=>$request->range_repair_1,
            'range_repair_2'=>$request->range_repair_2,
            'range_repair_3'=>$request->range_repair_3,
            'act_repair_1'=>$request->act_repair_1,
            'act_repair_2'=>$request->act_repair_2,
            'act_repair_3'=>$request->act_repair_3,
            'indirect_1'=>$request->indirect_1,
            'indirect_2'=>$request->indirect_2,
            'range_indirect_1'=>$request->range_indirect_1,
            'range_indirect_2'=>$request->range_indirect_2,
            'act_indirect_1'=>$request->act_indirect_1,
            'act_indirect_2'=>$request->act_indirect_2,

            'direct_1'=>$request->direct_1,
            'direct_2'=>$request->direct_2,
            'range_direct_1'=>$request->range_direct_1,
            'range_direct_2'=>$request->range_direct_2,
            'act_direct_1'=>$request->act_direct_1,
            'act_direct_2'=>$request->act_direct_2,

            'abnormality_1'=>$request->abnormality_1,
            'abnormality_2'=>$request->abnormality_2,
            'range_abnormality_1'=>$request->range_abnormality_1,
            'range_abnormality_2'=>$request->range_abnormality_2,
            'act_abnormality_1'=>$request->act_abnormality_1,
            'act_abnormality_2'=>$request->act_abnormality_2,

            'kehadiran_1'=>$request->kehadiran_1,
            'kehadiran_2'=>$request->kehadiran_2,

            'mindset_1'=>$request->mindset_1,
            'mindset_2'=>$request->mindset_2,
            'mindset_3'=>$request->mindset_3,
            'mindset_4'=>$request->mindset_4,

            'etika_1'=>$request->etika_1,
            'etika_2'=>$request->etika_2,
            'etika_3'=>$request->etika_3,
            'etika_4'=>$request->etika_4,
            'etika_5'=>$request->etika_5,
            'etika_6'=>$request->etika_6,
            'etika_7'=>$request->etika_7,
            'etika_8'=>$request->etika_8,
            'etika_9'=>$request->etika_9,
            'etika_10'=>$request->etika_10,

            'jkn_1'=>$request->jkn_1,
            'jkn_2'=>$request->jkn_2,
            'lima_r_1'=>$request->lima_r_1,
            'lima_r_2'=>$request->lima_r_2,

            'qcc_1'=>$request->qcc_1,
            'qcc_2'=>$request->qcc_2,
            'range_qcc_1'=>$request->range_qcc_1,
            'range_qcc_2'=>$request->range_qcc_2,
            'act_qcc_1'=>$request->act_qcc_1,
            'act_qcc_2'=>$request->act_qcc_2,

            'idea_1'=>$request->idea_1,
            'idea_2'=>$request->idea_2,
            'range_idea_1'=>$request->range_idea_1,
            'range_idea_2'=>$request->range_idea_2,
            'act_idea_1'=>$request->act_idea_1,
            'act_idea_2'=>$request->act_idea_2,
            'tji_1'=>$request->tji_1,
            'tji_2'=>$request->tji_2,
            'total_point'=>$request->kesehatan_1+$request->kesehatan_2+$request->kesehatan_3+$request->kesehatan_4+$request->kesehatan_5
            +$request->accident_1
            +$request->accident_2
            +$request->apd_1
            +$request-> apd_2+$request->spc_1
            +$request-> spc_2+$request->scw_1
            +$request-> scw_2
            +$request->kyt_1+$request-> kyt_2+$request->act_safety_ky_1+$request->act_safety_ky_2+$request->act_safety_idea_1+$request->act_safety_idea_2
            +$request->biq_1
            +$request->biq_2
            +$request->biq_3
            +$request->act_div_1
            +$request->act_div_2
            +$request->act_customer_1
            +$request->act_customer_2
            +$request->act_analisa_1
            +$request->act_analisa_2
            +$request->act_analisa_3
            +$request->act_reporting_1
            +$request->act_reporting_2
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
            +$request->act_tpm_1
            +$request->act_tpm_2
            +$request->act_tpm_3
            +$request->act_line_1
            +$request->act_line_2
            +$request->act_line_3
            +$request->act_repair_1
            +$request->act_repair_2
            +$request->act_repair_3
            +$request->act_indirect_1
            +$request->act_indirect_2
            +$request->act_direct_1
            +$request->act_direct_2
            +$request->act_abnormality_1
            +$request->act_abnormality_2
            +$request->kehadiran_1
            +$request->kehadiran_2

            +$request->mindset_1
            +$request->mindset_2
            +$request->mindset_3
            +$request->mindset_4

            +$request->etika_1
            +$request->etika_2
            +$request->etika_3
            +$request->etika_4
            +$request->etika_5
            +$request->etika_6
            +$request->etika_7
            +$request->etika_8
            +$request->etika_9
            +$request->etika_10
            +$request->jkn_1
            +$request->jkn_2
            +$request->lima_r_1
            +$request->lima_r_2
            +$request->act_qcc_1
            +$request->act_qcc_2
            +$request->act_idea_1
            +$request->act_idea_2+$request->tji_1+$request->tji_2
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
