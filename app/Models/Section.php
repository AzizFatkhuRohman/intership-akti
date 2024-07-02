<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory, HasUuids;
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
    public function mentor()
    {
        return $this->hasMany(Mentor::class);
    }
    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
    public function pindahMentor()
    {
        return $this->hasMany(PindahMentor::class);
    }
    public function evaluasiGanjil(){
        return $this->hasMany(EvaluasiGanjil::class);
    }
    public function evaluasiGenap(){
        return $this->hasMany(EvaluasiGenap::class);
    }
    public function ShowAdmin()
    {
        return $this->latest()->paginate(10);
    }
    public function Store($data)
    {
        return $this->create($data);
    }
}
