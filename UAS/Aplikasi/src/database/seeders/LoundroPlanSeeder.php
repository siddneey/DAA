<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LoundroPlan;

class LoundroPlanSeeder extends Seeder
{
    public function run()
    {
        LoundroPlan::create([
            'periode' => 'Januari 2025',
            'total_pemasukan' => 15000000,
            'total_pengeluaran' => 8000000,
            'saldo_bersih' => 7000000,
            'profit_persenan' => 46.67
        ]);

        LoundroPlan::create([
            'periode' => 'Februari 2025',
            'total_pemasukan' => 18000000,
            'total_pengeluaran' => 9000000,
            'saldo_bersih' => 9000000,
            'profit_persenan' => 50.00
        ]);
    }
}

