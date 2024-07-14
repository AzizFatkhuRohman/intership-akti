<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class NotifMahasiswa extends Model
{
    use HasFactory,HasUuids;
    protected $guarded=[];
    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class);
    }
    public function mentor(){
        return $this->belongsTo(Mentor::class);
    }
    public function Store($data){
        return $this->create($data);
    }
    public function Show(){
        $mahasiswa_id = Mahasiswa::where('user_id',Auth::user()->id)->value('id');
        return $this->where('mahasiswa_id',$mahasiswa_id)->latest()->limit(5)->get();
    }
    public function Count(){
        return $this->where('status','belum')->count();
    }
}
