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
            CabangSeeder::class,
            RoleSeeder::class,
            OwnerSeeder::class,
            ManajerSeeder::class,
            SupervisorSeeder::class,
            KasirSeeder::class,
            StaffGudangSeeder::class,
            BarangSeeder::class,
        ]);
    }
}
