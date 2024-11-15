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
        Schema::create('kendaraans', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nomor_plat'); // Nomor plat kendaraan
            $table->string('merk'); // Merk kendaraan
            $table->string('model'); // Model kendaraan
            $table->year('tahun_pembuatan'); // Tahun pembuatan kendaraan
            $table->enum('jenis_kendaraan', ['motor', 'mobil']); // Jenis kendaraan
            $table->string('jenis_bahan_bakar'); // Jenis bahan bakar kendaraan
            $table->string('nama_pemilik'); // Nama pemilik kendaraan
            $table->text('alamat_pemilik'); // Alamat pemilik kendaraan
            $table->string('kontak_pemilik'); // Kontak pemilik (telepon/email)
            $table->timestamps(); // Timestamps (created_at, updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraans');
    }
};
