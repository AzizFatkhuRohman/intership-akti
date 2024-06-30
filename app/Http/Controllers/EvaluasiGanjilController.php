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
        $title = 'Logbook Bulanan';
        if (Auth::user()->role == 'mentor') {
            $mentor_id = Mentor::where('user_id',Auth::user()->id)->value('id');
            return view('mentor.logbook.bulanan-ganjil',[
                'title'=>$title,
                'mahasiswa'=>Mahasiswa::where('mentor_id',$mentor_id)->latest()->get(),
                'data'=>$this->evaluasiGanjil->Show()
            ]);
        } else {
            # code...
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EvaluasiGanjil $evaluasiGanjil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(EvaluasiGanjil $evaluasiGanjil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, EvaluasiGanjil $evaluasiGanjil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EvaluasiGanjil $evaluasiGanjil)
    {
        //
    }
}
