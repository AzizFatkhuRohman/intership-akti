<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Mentor extends Model
{
    use HasFactory,HasUuids;
    protected $guarded=[];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
    public function mahasiswa(){
        return $this->hasMany(Mahasiswa::class);
    }
    public function pindahMentor()
    {
        return $this->hasMany(PindahMentor::class);
    }
    public function loogbookMingguan()
    {
        return $this->hasMany(LogbookMingguan::class);
    }
    public function triwulanGanjil()
    {
        return $this->hasMany(TriwulanGanjil::class);
    }
    public function evaluasiGanjil(){
        return $this->hasMany(EvaluasiGanjil::class);
    }
    public function evaluasiGenap(){
        return $this->hasMany(EvaluasiGenap::class);
    }
    public function notifMahasiswa()
    {
        return $this->hasMany(NotifMahasiswa::class);
    }
    public function notifMentor()
    {
        return $this->hasMany(NotifMentor::class);
    }
    public function notifSection()
    {
        return $this->hasMany(NotifSection::class);
    }
    public function ShowAdmin(){
        return $this->latest()->paginate(10);
    }
    public function Store($data)
    {
        return $this->create($data);
    }
    public function Hapus($id){
        return $this->find($id)->delete();
    }
    public function Edit($id,$data){
        return $this->find($id)->update($data);
    }
}
