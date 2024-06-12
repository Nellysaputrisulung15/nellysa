<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Prodi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Prodi::create([
            'nama_prodi' => 'Bisnis Digital'
        ]);

        Prodi::create([
            'nama_prodi' => 'Manajemen Informatika'
        ]);

        prodi::factory(10)->create();
        Mahasiswa::create([
            'nim' => 'E020322114',
            'nama'=> 'Nellysa muntiana',
            'no_hp'=> '0895401880505',
            'alamat'=> 'Banjarmasin',
            'foto' => 'E020322114.jpeg',
            'password' => '123',
            'prodi_id' => '1',
        ]);

        Mahasiswa::create([
            'nim' => 'E020322333',
            'nama'=> 'ryhan samudra',
            'no_hp'=> '081234567890',
            'alamat'=> 'Banjarbaru',
            'foto' => 'E020322114.jpeg',
            'password' => '123',
            'prodi_id' => '2',
        ]);  
        
        Mahasiswa::factory(10)->create();
        
    }
}
