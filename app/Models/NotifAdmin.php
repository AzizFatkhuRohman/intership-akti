<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class NotifAdmin extends Model
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
        return $this->with('mahasiswa','section','departement')->latest()->limit(5)->get();
    }
    public function Count(){
        return $this->where('status','belum')->count();
    }
    public function ShowDosen(){
        $dosen = Dosen::where('user_id',Auth::user()->id)->value('id');
        $mahasiswa = Mahasiswa::where('dosen_id',$dosen)->pluck('id');
        return $this->whereIn('mahasiswa_id',$mahasiswa)->latest()->limit(5)->get();
    }
    public function WhereDosen(){
        $dosen = Dosen::where('user_id',Auth::user()->id)->value('id');
        $mahasiswa = Mahasiswa::where('dosen_id',$dosen)->pluck('id');
        return $this->whereIn('mahasiswa_id',$mahasiswa)->latest()->limit(5)->get();
    }
    public function CountDosen(){
        $dosen = Dosen::where('user_id',Auth::user()->id)->value('id');
        $mahasiswa = Mahasiswa::where('dosen_id',$dosen)->pluck('id');
        return $this->whereIn('mahasiswa_id',$mahasiswa)->where('status','belum')->count();
    }
}
