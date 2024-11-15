<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $fillable=[
        'nomor_plat',
        'merk',
        'model',
        'tahun_pembuatan',
        'jenis_bahan_bakar',
        'nama_pemilik',
        'alamat_pemilik',
        'kontak_pemilik'
    ];
}
