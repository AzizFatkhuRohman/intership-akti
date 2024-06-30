<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluasiGenap extends Model
{
    use HasFactory,HasUuids;
    protected $table = 'evaluasi_genap';
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
}
