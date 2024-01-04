<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class CabangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cabangs')->insert([
            [
                'nama_cabang' => 'Jayusmart1',
                'kota'=> 'Cianjur',
                'created_at' => now(),
                'updated_at' => now(),
                'manajer_id' => '1',

            ],

            [
                'nama_cabang' => 'Jayusmart2',
                'kota'=> 'Bogor',
                'created_at' => now(),
                'updated_at' => now(),
                'manajer_id' => '2',

            ],

            [
                'nama_cabang' => 'Jayusmart3',
                'kota'=> 'Bandung',
                'created_at' => now(),
                'updated_at' => now(),
                'manajer_id' => '3',

            ],

            [
                'nama_cabang' => 'Jayusmart4',
                'kota'=> 'Bekasi',
                'created_at' => now(),
                'updated_at' => now(),
                'manajer_id' => '4',

            ],

            [
                'nama_cabang' => 'Jayusmart5',
                'kota'=> 'Jakarta',
                'created_at' => now(),
                'updated_at' => now(),
                'manajer_id' => '5',
            ],
        ]);
    }
}
