<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ManajerSeeder::class,
            BarangSeeder::class,
            CabangSeeder::class,
            JabatanSeeder::class,
            PegawaiSeeder::class,
        ]);
    }
}
