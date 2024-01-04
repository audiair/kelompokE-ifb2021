<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Faker\Factory as Faker;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i=0; $i < 5; $i++) { 
            DB::table('kasirs')->insert([
                'nama' => $faker->name,
                'email' => $faker->email,
                'no_tlp' => $faker-> phoneNumber,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
