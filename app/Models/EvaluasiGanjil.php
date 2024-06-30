<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class EvaluasiGanjil extends Model
{
    use HasFactory,HasUuids;
    protected $table='evaluasi_ganjil';
    protected $guarded=[];
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

    public function Show(){
        if (Auth::user()->role == 'mentor') {
            $mentor_id = Mentor::where('user_id',Auth::user()->id)->value('id');
            return $this->where('mentor_id',$mentor_id)->latest()->paginate(20);
        } else {
            # code...
        }
        
    }
}
