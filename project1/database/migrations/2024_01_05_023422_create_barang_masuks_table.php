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
        Schema::create('barang_masuks', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_masuk');
            $table->char('kode_barang',10);
            $table->char('jumlah',10);
            $table->char('harga_beli',10);
            $table->timestamps();

            $table->foreign('kode_barang')
                  ->references('kode')
                  ->on('barangs')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreignId('id_staff_gudang')
                  ->references('id')
                  ->on('staff_gudangs')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreignId('cabang_id')
                  ->references('id')
                  ->on('cabangs')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_masuks');
    }
};
