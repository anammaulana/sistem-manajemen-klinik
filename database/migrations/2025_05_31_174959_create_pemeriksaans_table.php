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
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->string('id_pemeriksaan')->primary();
            $table->string('id_pasien')->constrained('pasiens')->onDelete('cascade');
            $table->string('id_dokter')->constrained('dokters')->onDelete('cascade');
            $table->date('tanggal_periksa')->nullable();
            $table->text('keluhan')->nullable();
            $table->text('diagnosa')->nullable();
            $table->text('resep_obat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaans');
    }
};
