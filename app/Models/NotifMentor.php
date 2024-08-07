<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class NotifMentor extends Model
{
    use HasFactory,HasUuids;
    protected $guarded;
    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }
    public function mentor(){
        return $this->belongsTo(Mentor::class);
    }
    public function section(){
        return $this->belongsTo(Section::class);
    }
    public function departement(){
        return $this->belongsTo(Departement::class);
    }
    public function Store($data){
        return $this->create($data);
    }
    public function Show(){
        $mentor = Mentor::where('user_id',Auth::user()->id)->value('id');
        return $this->where('mentor_id',$mentor)->with('mahasiswa','section','departement')->latest()->limit(5)->get();
    }
    public function Count(){
        return $this->where('status','belum')->count();
    }
}
