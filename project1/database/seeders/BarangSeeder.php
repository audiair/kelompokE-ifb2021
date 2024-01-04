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
                'jenis'=>'Beras Putih',
                'satuan'=>'Kilogram',
                'harga_satuan'=>'15000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'002',
                'nama_barang'=>'Susu',
                'jenis'=>'Susu UHT',
                'satuan'=>'Liter',
                'harga_satuan'=>'15000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'003',
                'nama_barang'=>'Mie',
                'jenis'=>'Mie Goreng',
                'satuan'=>'Pcs',
                'harga_satuan'=>'4000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'004',
                'nama_barang'=>'Mie',
                'jenis'=>'Mie Kuah',
                'satuan'=>'Pcs',
                'harga_satuan'=>'4000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'005',
                'nama_barang'=>'Terigu',
                'jenis'=>'Protein Tinggi',
                'satuan'=>'Kilogram',
                'harga_satuan'=>'15000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'006',
                'nama_barang'=>'Terigu',
                'jenis'=>'Protein Sedang',
                'satuan'=>'Kilogram',
                'harga_satuan'=>'15000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'007',
                'nama_barang'=>'Tisu',
                'jenis'=>'Tisu Basah',
                'satuan'=>'Pack',
                'harga_satuan'=>'10000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'008',
                'nama_barang'=>'Tisu',
                'jenis'=>'Tisu Wajah',
                'satuan'=>'Pack',
                'harga_satuan'=>'15000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'009',
                'nama_barang'=>'Kecap',
                'jenis'=>'Kecap Manis',
                'satuan'=>'Ml',
                'harga_satuan'=>'10000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'kode'=>'010',
                'nama_barang'=>'Kecap',
                'jenis'=>'Kecap Asin',
                'satuan'=>'Ml',
                'harga_satuan'=>'10000',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}