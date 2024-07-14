<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\NotifMentor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotifMentorController extends Controller
{
    protected $notifMentor;
    public function __construct(NotifMentor $notifMentor){
        $this->notifMentor=$notifMentor;
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
        $mentor_id = Mentor::where('user_id',$id)->value('id');
        $data = NotifMentor::where('mentor_id',$mentor_id)->latest()->paginate(20);
        return view('mentor.notif',[
            'title'=>'Notification',
            'data'=>$data,
            'notif'=>$this->notifMentor->Show(),
            'count'=>$this->notifMentor->Count()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NotifMentor $notifMentor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        NotifMentor::find($id)->update([
            'status'=>'dibaca'
        ]);
        return redirect('mentor/notification/'.Auth::user()->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NotifMentor $notifMentor)
    {
        //
    }
}
