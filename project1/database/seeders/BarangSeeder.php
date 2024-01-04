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
                'nama_barang'=>'Beras Putih',
                'jenis'=>'Beras',
                'satuan'=>'Kilogram',
                'harga_satuan'=>'15000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'002',
                'nama_barang'=>'Susu UHT',
                'jenis'=>'Susu',
                'satuan'=>'Liter',
                'harga_satuan'=>'15000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'003',
                'nama_barang'=>'Mie Goreng',
                'jenis'=>'Mie',
                'satuan'=>'Pcs',
                'harga_satuan'=>'4000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'004',
                'nama_barang'=>'Mie Kuah',
                'jenis'=>'Mie',
                'satuan'=>'Pcs',
                'harga_satuan'=>'4000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'005',
                'nama_barang'=>'Terigu Protein Tinggi',
                'jenis'=>'Terigu',
                'satuan'=>'Kilogram',
                'harga_satuan'=>'15000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'006',
                'nama_barang'=>'Terigu Protein Sedang',
                'jenis'=>'Terigu',
                'satuan'=>'Kilogram',
                'harga_satuan'=>'15000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'007',
                'nama_barang'=>'Tisu Basah',
                'jenis'=>'Tisu',
                'satuan'=>'Pack',
                'harga_satuan'=>'10000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'008',
                'nama_barang'=>'Tisu Wajah',
                'jenis'=>'Tisu',
                'satuan'=>'Pack',
                'harga_satuan'=>'15000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'009',
                'nama_barang'=>'Kecap Manis',
                'jenis'=>'Kecap',
                'satuan'=>'Ml',
                'harga_satuan'=>'10000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'010',
                'nama_barang'=>'Kecap Asin',
                'jenis'=>'Kecap',
                'satuan'=>'Ml',
                'harga_satuan'=>'10000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
