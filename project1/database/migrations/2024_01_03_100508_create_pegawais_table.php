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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->char('pegawai_id');
            $table->string('nama', 50);
            $table->string('email', 50);
            $table->char('no_tlp', 20);
            $table->timestamps();

            $table->primary('pegawai_id');

            $table->foreignId('jabatan_id')
                  ->references('id')
                  ->on('jabatans')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
