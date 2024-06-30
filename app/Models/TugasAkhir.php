<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class TugasAkhir extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'tugas_akhir';
    protected $guarded = [];
    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    public function ShowMahasiswa($mahasiswa_id)
    {
        return $this->where('mahasiswa_id', $mahasiswa_id)->first();
    }
    public function Store($data)
    {
        return $this->create($data);
    }
    public function ShowMentor()
    {
        $mentor_id = Mentor::where('user_id', Auth::user()->id)->value('id');
        return $this->where('mentor_id', $mentor_id)->latest()->paginate(20);
    }
    public function ShowSection()
    {
        $section_id = Section::where('user_id', Auth::user()->id)->value('id');
        return $this->where('section_id', $section_id)->latest()->paginate(20);
    }
    public function ShowDepartement()
    {
        $departement_id = Departement::where('user_id', Auth::user()->id)->value('id');
        return $this->where('departement_id', $departement_id)->latest()->paginate(20);
    }
    public function ShowDosen(){
        $dosen_id = Dosen::where('user_id',Auth::user()->id)->value('id');
        $mahasiswa_id = Mahasiswa::where('dosen_id',$dosen_id)->pluck('id');
        return $this->whereIn('mahasiswa_id',$mahasiswa_id)->latest()->paginate(20);
    }

}
