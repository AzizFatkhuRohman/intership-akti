<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\EvaluasiGenap;
use App\Models\Mahasiswa;
use App\Models\Mentor;
use App\Models\NotifAdmin;
use App\Models\NotifDepartement;
use App\Models\NotifMahasiswa;
use App\Models\NotifMentor;
use App\Models\NotifSection;
use Barryvdh\DomPDF\Facade\Pdf;
use Faker\Factory as Faker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EvaluasiGenapController extends Controller
{
    protected $evaluasiGenap;
    protected $notifMahasiswa;
    protected $notifMentor;
    protected $notifSection;
    protected $notifDepartement;
    protected $notifAdmin;
    public function __construct(EvaluasiGenap $evaluasiGenap,NotifMahasiswa $notifMahasiswa, NotifMentor $notifMentor,NotifSection $notifSection,NotifDepartement $notifDepartement,NotifAdmin $notifAdmin){
        $this->evaluasiGenap=$evaluasiGenap;
        $this->notifMahasiswa=$notifMahasiswa;
        $this->notifMentor=$notifMentor;
        $this->notifSection=$notifSection;
        $this->notifDepartement=$notifDepartement;
        $this->notifAdmin=$notifAdmin;
    }
    public function index()
    {
        $title = "Evaluasi Bulanan Genap";
        if (Auth::user()->role == 'mentor') {
            $mentor_id = Mentor::where('user_id',Auth::user()->id)->value('id');
            return view('mentor.logbook.bulanan-genap',[
                'title'=>$title,
                'mahasiswa'=>Mahasiswa::where('mentor_id',$mentor_id)->latest()->get(),
                'data'=>$this->evaluasiGenap->Show(),
                'notif'=>$this->notifMentor->Show(),
                'count'=>$this->notifMentor->Count()
            ]);
        } elseif(Auth::user()->role == 'section') {
            return view('section.logbook.bulanan-genap',[
                'title'=>$title,
                'data'=>$this->evaluasiGenap->Show(),
                'notif'=>$this->notifSection->Show(),
                'count'=>$this->notifSection->Count()
            ]);
        }elseif(Auth::user()->role == 'mahasiswa'){
            return view('mahasiswa.logbook.bulanan-genap',[
                'title'=>$title,
                'data'=>$this->evaluasiGenap->Show(),
                'notif'=>$this->notifMahasiswa->Show(),
                'count'=>$this->notifMahasiswa->Count()
            ]);
        }elseif(Auth::user()->role == 'admin'){
            return view('admin.logbook.bulanan-genap',[
                'title'=>$title,
                'data'=>EvaluasiGenap::latest()->paginate(10),
                'notif'=>$this->notifAdmin->Show(),
                'count'=>$this->notifAdmin->Count()
            ]);
        }else{
            $dosen = Dosen::where('user_id',Auth::user()->id)->value('id');
            $mahasiswa = Mahasiswa::where('dosen_id',$dosen)->value('id');
            return view('dosen.logbook.bulanan-genap',[
                'title'=>$title,
                'data'=>EvaluasiGenap::where('mahasiswa_id',$mahasiswa)->latest()->paginate(10),
                'notif'=>$this->notifAdmin->Show(),
                'count'=>$this->notifAdmin->Count()
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
            'inisiatif'=>$request->inisiatif,
            'disiplin'=>$request->disiplin,
            'tanggung_jawab'=>$request->tanggung_jawab,
            'kerja_sama'=>$request->kerja_sama,
            'jkn'=>$request->jkn,
            'lima_r'=>$request->lima_r,
            'qcc'=>$request->qcc,
            'idea'=>$request->idea,
            'training'=>$request->training,
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
            $request->inisiatif+
            $request->disiplin+
            $request->tanggung_jawab+
            $request->kerja_sama+
            $request->jkn+
            $request->lima_r+
            $request->qcc+
            $request->idea+
            $request->training
        ]);
        $this->notifMahasiswa->Store([
            'mahasiswa_id'=>$request->mahasiswa_id,
            'mentor_id'=>$mentor_id->id,
            'content'=>'Evaluasi bulanan genap dibuat'
        ]);
        $this->notifSection->Store([
            'mentor_id'=>$mentor_id->id,
            'section_id'=>$mentor_id->section_id,
            'departement_id'=>$mentor_id->departement_id,
            'content'=>'Evaluasi bulanan genap dibuat oleh '.Auth::user()->nama
        ]);
        return back()->with('sukses','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return back()->with('gagal','Sedang dalam maintenance');
        // $pdf = Pdf::loadView('cetak.evaluasi-genap', [
        //     'data'=>EvaluasiGenap::find($id)->first()
        // ]);
        // $pdf->setPaper('A4', 'portrait');
        // return $pdf->stream(Faker::create()->randomNumber(5, true) . '-triwulan-genap.pdf');
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
            $evaluasi = EvaluasiGenap::find($id)->first();
            $this->notifMentor->Store([
                'mahasiswa_id'=>$evaluasi->mahasiswa_id,
                'mentor_id'=>$evaluasi->mentor_id,
                'section_id'=>$evaluasi->section_id,
                'departement_id'=>$evaluasi->departement_id,
                'content'=>'Evaluasi bulanan genap telah diubah oleh '.Auth::user()->nama
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
