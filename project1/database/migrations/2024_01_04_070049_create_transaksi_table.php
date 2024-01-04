<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_transaksi');
            $table->char('kode_barang',10);
            $table->char('jumlah',10);
            $table->char('harga_satuan',10);
            $table->char('sub_total',10);
            $table->timestamps();

            $table->foreignId('id_pegawai')
                  ->references('id')
                  ->on('pegawais')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            
            $table->foreign('kode_barang')
                  ->references('kode')
                  ->on('barangs')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
