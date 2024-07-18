<?php

namespace App\Http\Controllers;

use App\Exports\TriwulanBulan;
use App\Exports\TriwulanMinggu;
use App\Exports\TriwulanTahun;
use App\Models\Mahasiswa;
use App\Models\Mentor;
use App\Models\NotifAdmin;
use App\Models\NotifDepartement;
use App\Models\NotifMahasiswa;
use App\Models\NotifMentor;
use App\Models\NotifSection;
use App\Models\TriwulanGanjil;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Faker\Factory as Faker;
use Maatwebsite\Excel\Facades\Excel;

class TriwulanGanjilController extends Controller
{
    protected $triwulanGanjil;
    protected $notifMentor;
    protected $notifMahasiswa;
    protected $notifSection;
    protected $notifDepartement;
    protected $notifAdmin;
    public function __construct(TriwulanGanjil $triwulanGanjil,NotifMentor $notifMentor, NotifMahasiswa $notifMahasiswa,NotifSection $notifSection,NotifDepartement $notifDepartement,NotifAdmin $notifAdmin)
    {
        $this->triwulanGanjil = $triwulanGanjil;
        $this->notifMentor=$notifMentor;
        $this->notifMahasiswa=$notifMahasiswa;
        $this->notifSection=$notifSection;
        $this->notifDepartement=$notifDepartement;
        $this->notifAdmin=$notifAdmin;
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
                'data'=>$this->triwulanGanjil->ShowDosen(),
                'notif'=>$this->notifAdmin->ShowDosen(),
                'count'=>$this->notifAdmin->CountDosen()
            ]);
        }elseif (Auth::user()->role == 'departement'){
            return view('departement.logbook.triwulan-ganjil',[
                'title'=>$title,
                'data'=>$this->triwulanGanjil->ShowDepartement(),
                'notif'=>$this->notifDepartement->Show(),
                'count'=>$this->notifDepartement->Count()
            ]);
        }elseif(Auth::user()->role == 'admin'){
            return view('admin.logbook.triwulan-ganjil',[
                'title'=>$title,
                'data'=>TriwulanGanjil::latest()->paginate(10),
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
        $this->notifMahasiswa->Store([
            'mahasiswa_id'=>$request->mahasiswa_id,
            'mentor_id'=>$mentor_id->id,
            'content'=>'Logbook Triwulan dibuat'
        ]);
        $this->notifSection->Store([
            'mentor_id'=>$mentor_id->id,
            'section_id'=>$mentor_id->section_id,
            'departement_id'=>$mentor_id->departement_id,
            'content'=>'Logbook Triwulan dibuat oleh '.Auth::user()->nama
        ]);
        $this->notifDepartement->Store([
            'mahasiswa_id'=>$request->mahasiswa_id,
            'mentor_id'=>$mentor_id->id,
            'section_id'=>$mentor_id->section_id,
            'departement_id'=>$mentor_id->departement_id,
            'content'=>'Logbook Triwulan dibuat oleh '.Auth::user()->nama
        ]);
        return back()->with('sukses', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = TriwulanGanjil::with('mahasiswa','mentor','section','departement')->find($id)->first();
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
        $triwulan = TriwulanGanjil::find($id)->first();
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
            return redirect('mentor/logbook/triwulan')->with('sukses', 'Data berhasil diubah');
        } elseif (Auth::user()->role == 'section') {
            $this->triwulanGanjil->Edit($id, [
                'status' => $request->status
            ]);
            if ($request->status == 'accept_sec') {
                $status = 'Accept';
            } else {
                $status = 'Reject';
            }
            $this->notifMentor->Store([
                'mahasiswa_id'=>$triwulan->mahasiswa_id,
                'mentor_id'=>$triwulan->mentor_id,
                'section_id'=>$triwulan->section_id,
                'departement_id'=>$triwulan->departement_id,
                'content'=>'Logbook Triwulan telah di'.$status.' oleh section'
            ]);
            return redirect('section/logbook/triwulan')->with('sukses', 'Data berhasil diubah');
        } elseif (Auth::user()->role == 'departement') {
            $this->triwulanGanjil->Edit($id, [
                'status' => $request->status
            ]);
            if ($request->status == 'accept_dep') {
                $status = 'Accept';
            } else {
                $status = 'Reject';
            }
            
            $this->notifMentor->Store([
                'mahasiswa_id'=>$triwulan->mahasiswa_id,
                'mentor_id'=>$triwulan->mentor_id,
                'section_id'=>$triwulan->section_id,
                'departement_id'=>$triwulan->departement_id,
                'content'=>'Logbook Triwulan telah di'.$status.' oleh departement'
            ]);
            $this->notifSection->Store([
                'mentor_id'=>$triwulan->mentor_id,
                'section_id'=>$triwulan->section_id,
                'departement_id'=>$triwulan->departement_id,
                'content'=>'Logbook Triwulan telah di'.$status.' oleh departement'
            ]);
            return redirect('departement/logbook/triwulan')->with('sukses', 'Data berhasil diubah');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $this->triwulanGanjil->Hapus($id);
        return redirect('mentor/logbook/triwulan')->with('sukses', 'Data berhasil dihapus');
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
    public function export(Request $request){
        if ($request->waktu == 'minggu') {
            return Excel::download(new TriwulanMinggu,'Triwulan.xlsx');
        } elseif ($request->waktu == 'bulan')  {
            return Excel::download(new TriwulanBulan,'Triwulan.xlsx');
        }else{
            return Excel::download(new TriwulanTahun,'Triwulan.xlsx');
        }
    }
}
