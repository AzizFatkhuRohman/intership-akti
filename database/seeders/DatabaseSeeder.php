<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'nama'=>'Mahasiswa',
            'nomor_induk' => '1234',
            'role' => 'mahasiswa',
            'password'=>Hash::make('akti2024')
        ]);
        \App\Models\User::create([
            'nama'=>'Mentor',
            'nomor_induk' => '1223',
            'role' => 'mentor',
            'password'=>Hash::make('akti2024')
        ]);
        \App\Models\User::create([
            'nama'=>'Section',
            'nomor_induk' => '1233',
            'role' => 'section',
            'password'=>Hash::make('akti2024')
        ]);
        \App\Models\User::create([
            'nama'=>'Departement',
            'nomor_induk' => '12344',
            'role' => 'departement',
            'password'=>Hash::make('akti2024')
        ]);
        \App\Models\User::create([
            'nama'=>'Admin',
            'nomor_induk' => '12233',
            'role' => 'admin',
            'password'=>Hash::make('akti2024')
        ]);
        \App\Models\User::create([
            'nama'=>'Dosen',
            'nomor_induk' => '122344',
            'role' => 'dosen',
            'password'=>Hash::make('akti2024')
        ]);
    }
}
