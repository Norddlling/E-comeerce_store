<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'product_name' => 'Apple iPhone 15 Pro', 
                'category' => 'Phones', 
                'quantity_of_product' => 10,
                'price' => 899, 
                'product_characteristics' => 'SOC A17',
                'description' => 'New iPhone',
                'product_image' => 'iphones-7479304_1280.jpg',
            ],

            [
                'product_name' => 'Apple iPad 10.9 2022', 
                'category' => 'Tablets', 
                'quantity_of_product' => 10,
                'price' => 499, 
                'product_characteristics' => nl2br('SOC A14 Bionic'),
                'description' => nl2br('New iPad'),
                'product_image' => 'bar-621033_1280.jpg',
            ],
        ]);
    }
}
