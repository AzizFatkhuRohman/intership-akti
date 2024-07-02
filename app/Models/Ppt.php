<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Ppt extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'ppt';
    protected $guarded = [];
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    public function ShowMahasiswa($mahasiswa_id)
    {
        $mahasiswa_id = Mahasiswa::where('user_id',Auth::user()->id)->value('id');
        return $this->where('mahasiswa_id', $mahasiswa_id)->first();
    }
    public function ShowDepartement(){
        $departement_id = Departement::where('user_id',Auth::user()->id)->value('id');
        return $this->where('departement_id',$departement_id)->latest()->paginate(10);
    }
    public function Store($data)
    {
        return $this->create($data);
    }
}
