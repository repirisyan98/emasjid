<?php

namespace Database\Seeders;

use App\Models\MasterHewan;
use App\Models\ProfileMasjid;
use App\Models\Saldo;
use App\Models\User;
use App\Models\ZiswafVisi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'TempatLahir' => 'Bandung',
            'TanggalLahir' => '1998-12-13',
            'alamat' => 'Bandung',
            'kontak' => '082262366949',
            'JenisKelamin' => 'Laki-laki',
            'role' => 1,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'picture' => 'default_picture.png',
        ]);

        Saldo::create([
            'jumlah_saldo' => 0
        ]);

        MasterHewan::create([
            'nama' => 'Sapi'
        ]);

        MasterHewan::create([
            'nama' => 'Kambing'
        ]);

        ProfileMasjid::create([
            'visi_misi' => 'Ini Visi Misi',
            'sejarah' => 'Ini Sejarah'
        ]);

        ZiswafVisi::create([
            'visi_misi' => 'Ini Visi Misi Ziswaf'
        ]);

        // User::factory(50)->create();
        // Kontak::factory(100)->create();
        // Change role to 3 and id_jabatan to 1
        // User::factory(5)->hasDistribusi(10)->create();   
    }
}
