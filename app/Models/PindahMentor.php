<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PindahMentor extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'pindah_mentor';
    protected $guarded = [];
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
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
    public function Store($data)
    {
        return $this->create($data);
    }
    public function ShowMahasiswa(){
        $mahasiswa_id = Mahasiswa::where('user_id',Auth::user()->id)->value('id');
        return $this->with('mentor','section','departement')->where('mahasiswa_id',$mahasiswa_id)->latest()->paginate(20);
    }
    public function ShowAdmin(){
        return $this->with('mentor','section','departement')->latest()->paginate(20);
    }
    public function Hapus($id){
        return $this->find($id)->delete();
    }
    public function Edit($id,$data){
        return $this->find($id)->update($data);
    }
}
