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
                'product_name' => 'Apple iPhone 15', 
                'category' => 'Phones', 
                'quantity_of_product' => 10,
                'product_characteristics' => 'SOC A16 Bionic', 
                'description' => 'New iPhone',
                'product_image' => 'iphones-7479304_1280.jpg',
                'users_raiting' => 5,
            ],

            [
                'product_name' => 'Apple iPad 10.9 2022', 
                'category' => 'Tablets', 
                'quantity_of_product' => 10,
                'product_characteristics' => 'SOC A14 Bionic', 
                'description' => 'New iPad',
                'product_image' => 'bar-621033_1280.jpg',
                'users_raiting' => 4,
            ],
        ]);
    }
}
