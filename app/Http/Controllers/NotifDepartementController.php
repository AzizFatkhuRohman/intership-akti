<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\NotifDepartement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotifDepartementController extends Controller
{
    protected $notifDepartement;
    public function __construct(NotifDepartement $notifDepartement){
        $this->notifDepartement=$notifDepartement;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $departement_id = Departement::where('user_id',Auth::user()->id)->value('id');
        return view('departement.notif',[
            'title'=>'Notification',
            'data'=>NotifDepartement::where('departement_id',$departement_id)->latest()->paginate(20),
            'notif'=>$this->notifDepartement->Show(),
            'count'=>$this->notifDepartement->Count()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NotifDepartement $notifDepartement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        NotifDepartement::find($id)->update([
            'status'=>'dibaca'
        ]);
        return redirect('departement/notification/'.Auth::user()->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NotifDepartement $notifDepartement)
    {
        //
    }
}
