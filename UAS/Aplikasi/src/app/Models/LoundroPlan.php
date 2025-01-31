<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoundroPlan extends Model
{
    use HasFactory;

    protected $table = 'loundro_plans'; // Sesuaikan dengan nama tabel
    protected $fillable = [
        'periode',
        'total_pemasukan',
        'total_pengeluaran',
        'saldo_bersih',
        'profit_persenan'
    ];

    public function pemasukan()
    {
        return $this->hasMany(Pemasukan::class, 'id_laporan');
    }

    public function pengeluaran()
    {
        return $this->hasMany(Pengeluaran::class, 'id_laporan');
    }
}
