<?php

namespace App\Http\Controllers;

use App\Models\NotifSection;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotifSectionController extends Controller
{
    protected $notifSection;
    public function __construct(NotifSection $notifSection){
        $this->notifSection=$notifSection;
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
        $section = Section::where('user_id',$id)->value('id');
        return view('section.notif',[
            'title'=>'Notification',
            'data'=>NotifSection::where('section_id',$section)->latest()->paginate(20),
            'notif'=>$this->notifSection->Show(),
            'count'=>$this->notifSection->Count()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NotifSection $notifSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        NotifSection::find($id)->update([
            'status'=>'dibaca'
        ]);
        return redirect('section/notification/'.Auth::user()->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NotifSection $notifSection)
    {
        //
    }
}
