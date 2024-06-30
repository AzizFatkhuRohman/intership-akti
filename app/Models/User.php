<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function mentor()
    {
        return $this->hasOne(Mentor::class);
    }
    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class);
    }
    public function dosen()
    {
        return $this->hasOne(Dosen::class);
    }
    public function section()
    {
        return $this->hasOne(Section::class);
    }
    public function departement()
    {
        return $this->hasOne(Departement::class);
    }
    public function Store($data)
    {
        return $this->create($data);
    }
    public function ShowAdmin()
    {
        return $this->latest()->paginate(20);
    }
    public function ShowMahasiswa()
    {
        return $this->where('role', 'mahasiswa')
            ->orWhere('role', 'mentor')
            ->orWhere('role', 'section')
            ->orWhere('role', 'dosen')
            ->orWhere('role', 'departement')
            ->latest()
            ->paginate(20);
    }
    public function lupaPassword($nomor_induk, $data){
        return $this->where('nomor_induk',$nomor_induk)->update($data);
    }
}
