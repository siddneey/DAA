<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTestSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('product_tests')->insert([
            ['name' => 'Adidas', 'price' => 1000, 'category' => 'Sepatu'],
            ['name' => 'Nike', 'price' => 999, 'category' => 'Sepatu'],
            ['name' => 'Levis', 'price' => 500, 'category' => 'Celana'],
            ['name' => 'Uniqlo', 'price' => 100, 'category' => 'Baju'],
        ]);
    }
}
