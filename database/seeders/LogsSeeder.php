<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=1; $i <= 10 ; $i++) {

            $id_users = $faker->numberBetween(2, 10);
            $waktu = $faker->dateTimeBetween('2024-01-01', 'now');

            DB::table('logs')->insert([
                'id_users'  => $id_users,
                'waktuTap' => $waktu,
            ]);
        }
    }
}
