<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory,HasUuids;
    protected $guarded=[];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function mahasiswa(){
        return $this->hasMany(Mahasiswa::class);
    }
    public function ShowAdmin(){
        return $this->latest()->paginate(20);
    }
    public function Store($data)
    {
        return $this->create($data);
    }
}
