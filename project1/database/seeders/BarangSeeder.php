<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kode'=>'001',
                'nama_barang'=>'Beras',
                'stok' => '100',
                'satuan'=>'Kilogram',
                'harga_satuan'=>'15000',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => '5',
            ],

            [
                'kode'=>'002',
                'nama_barang'=>'Susu',
                'stok' => '50',
                'satuan'=>'Liter',
                'harga_satuan'=>'15000',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => '5',
            ],

            [
                'kode'=>'003',
                'nama_barang'=>'Mie',
                'stok' => '100',
                'satuan'=>'Pcs',
                'harga_satuan'=>'4000',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => '5',
            ],
        ]);
    }
}
