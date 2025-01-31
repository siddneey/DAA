<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('loundro_plans', function (Blueprint $table) {
            $table->id();
            $table->string('periode'); // Contoh: "Januari 2025"
            $table->decimal('total_pemasukan', 10, 2)->default(0);
            $table->decimal('total_pengeluaran', 10, 2)->default(0);
            $table->decimal('saldo_bersih', 10, 2)->default(0);
            $table->decimal('profit_persenan', 5, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('loundro_plans');
    }
};
