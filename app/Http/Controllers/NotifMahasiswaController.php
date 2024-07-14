<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\NotifMahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotifMahasiswaController extends Controller
{
    protected $notifMahasiswa;
    public function __construct(NotifMahasiswa $notifMahasiswa){
        $this->notifMahasiswa=$notifMahasiswa;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    public function show($id)
    {
        $mahasiswa = Mahasiswa::where('user_id',Auth::user()->id)->value('id');
        return view('mahasiswa.notif',[
            'title'=>'Notification',
            'data'=>NotifMahasiswa::where('mahasiswa_id',$mahasiswa)->latest()->paginate(20),
            'notif'=>$this->notifMahasiswa->Show(),
            'count'=>$this->notifMahasiswa->Count()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NotifMahasiswa $notifMahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        NotifMahasiswa::find($id)->update([
            'status'=>'dibaca'
        ]);
        return redirect('mahasiswa/notification/'.Auth::user()->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NotifMahasiswa $notifMahasiswa)
    {
        //
    }
}
