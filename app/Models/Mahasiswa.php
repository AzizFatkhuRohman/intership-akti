<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Mahasiswa extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'mahasiswa';
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function mentor()
    {
        return $this->belongsTo(Mentor::class);
    }
    public function section()
    {
        return $this->belongsTo(Section::class);
    }
    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }
    public function loogbookMingguan()
    {
        return $this->hasMany(LogbookMingguan::class);
    }
    
    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
    public function pindahMentor()
    {
        return $this->hasMany(PindahMentor::class);
    }
    public function ppt()
    {
        return $this->hasOne(Ppt::class);
    }
    public function tugasAkhir()
    {
        return $this->hasOne(TugasAkhir::class);
    }
    public function reporta3()
    {
        return $this->hasOne(ReportA3::class);
    }
    public function sertifikat()
    {
        return $this->hasMany(Sertifikat::class);
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
    public function ShowProfil($id)
    {
        return $this->with('user', 'mentor', 'dosen')->where('user_id', $id)->first();
    }
    public function ShowAdmin()
    {
        return $this->latest()->paginate(20);
    }
    public function ShowMentor()
    {
        $mentor_id = Mentor::where('user_id', Auth::user()->id)->value('id');
        return $this->where('mentor_id', $mentor_id)->latest()->paginate(20);
    }
    public function ShowSection()
    {
        $section_id = Section::where('user_id',Auth::user()->id)->value('id');
        return $this->where('section_id', $section_id)->latest()->paginate(20);
    }
    public function ShowDosen(){
        $dosen_id = Dosen::where('user_id',Auth::user()->id)->value('id');
        return $this->where('dosen_id',$dosen_id)->latest()->paginate(20);
    }
    public function ShowDepartement(){
        $departement_id = Departement::where('user_id',Auth::user()->id)->value('id');
        return $this->where('departement_id',$departement_id)->latest()->paginate(20);
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
