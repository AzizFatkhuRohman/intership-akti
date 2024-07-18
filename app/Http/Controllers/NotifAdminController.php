<?php

namespace App\Http\Controllers;

use App\Models\NotifAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotifAdminController extends Controller
{
    protected $notifAdmin;
    public function __construct(NotifAdmin $notifAdmin){
        $this->notifAdmin=$notifAdmin;
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
        return view('admin.notif',[
            'title'=>'Notification',
            'data'=>NotifAdmin::latest()->paginate(20),
            'notif'=>$this->notifAdmin->Show(),
            'count'=>$this->notifAdmin->Count()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NotifAdmin $notifAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        NotifAdmin::find($id)->update([
            'status'=>'dibaca'
        ]);
        if (Auth::user()->role == 'admin') {
            return redirect('admin/notification/'.Auth::user()->id);
        } else {
            return redirect('dosen/notification/'.Auth::user()->id);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NotifAdmin $notifAdmin)
    {
        //
    }
}
