<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kendaraan; // Pastikan namespace model Kendaraan diimpor


class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kendaraan::insert([
            [
                'nomor_plat' => 'B1234XYZ',
                'merk' => 'Toyota',
                'model' => 'Avanza',
                'tahun_pembuatan' => 2020,
                'jenis_kendaraan' => 'mobil',
                'jenis_bahan_bakar' => 'bensin',
                'nama_pemilik' => 'John Doe',
                'alamat_pemilik' => 'Jl. Sudirman No. 123, Jakarta',
                'kontak_pemilik' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
