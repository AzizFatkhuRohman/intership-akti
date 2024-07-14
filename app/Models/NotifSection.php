<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotifSection extends Model
{
    use HasFactory,HasUuids;
    protected $guarded=[];
    public function section(){
        return $this->belongsTo(Section::class);
    }
    public function mentor(){
        return $this->belongsTo(Mentor::class);
    }
    public function departement(){
        return $this->belongsTo(Departement::class);
    }
    public function Store($data){
        return $this->create($data);
    }
    public function Show(){
        return $this->with('mentor','section','departement')->latest()->limit(5)->get();
    }
    public function Count(){
        return $this->where('status','belum')->count();
    }
}
