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
            return $this->with('mahasiswa','section','departement')->where('mentor_id',$mentor_id)->latest()->paginate(10);
        } elseif(Auth::user()->role == 'section') {
            $section_id = Section::where('user_id',Auth::user()->id)->value('id');
            return $this->with('mahasiswa','mentor','departement')->where('section_id',$section_id)->latest()->paginate(10);
        } elseif(Auth::user()->role == 'mahasiswa'){
            $mahasiswa_id = Mahasiswa::where('user_id',Auth::user()->id)->value('id');
            return $this->with('mentor','section','departement')->where('mahasiswa_id',$mahasiswa_id)->latest()->paginate(10);
        } elseif(Auth::user()->role == 'departement'){
            $departement_id = Departement::where('user_id',Auth::user()->id)->value('id');
            return $this->with('mahasiswa','mentor','section')->where('departement_id',$departement_id)->latest()->paginate(10);
        }
        
    }
    public function Store($data){
        return $this->create($data);
    }
    public function Edit($id,$data){
        return $this->find($id)->update($data);
    }
}
