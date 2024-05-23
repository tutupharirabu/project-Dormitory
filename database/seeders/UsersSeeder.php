<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'email' => 'code.zharaurien@gmail.com',
            'role' => 'admin',
            'nama_lengkap' => 'Irfan Zharauri Nanda Sudiyanto',
            'password' => Hash::make('dhiladminaja123'),
            'NIM' => '1303210006',
            'gedung' => 'Gedung 2',
            'kamar' => '312',
        ]);

        $gedung = ['Gedung 1', 'Gedung 2', 'Gedung 3', 'Gedung 4', 'Gedung 5', 'Gedung 6', 'Gedung 7', 'Gedung 8', 'Gedung 9', 'Gedung 10', 'Gedung 11', 'Gedung 12', 'Gedung A', 'Gedung B', 'Gedung C', 'Gedung D', 'Gedung E', 'Gedung F'];
        shuffle($gedung);

        $faker = Faker::create('id_ID');
        for ($i=1; $i <= 9 ; $i++) {
            $namaGedung = $gedung[$i-1];
            $role = $faker->randomElement(['Senior Residents', 'Mahasiswa Baru', 'Pengelola TJ', 'Satpam']);

            DB::table('users')->insert([
                'email' => $faker->email,
                'role' => $role,
                'nama_lengkap' => $faker->name,
                'password' => Hash::make('password'),
                'NIM' => $faker->numberBetween(100000000, 150000000),
                'gedung' => $namaGedung,
                'kamar' => $faker->numberBetween(100, 424),
            ]);
        }
    }
}
