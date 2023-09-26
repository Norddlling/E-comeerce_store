<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'category' => 'Phones', 
            ],

            [
                'category' => 'Tablets',
            ],

            [
                'category' => 'Laptops',
            ],

            [
                'category' => 'Desctops',
            ],

            [
                'category' => 'Headphones',
            ],

            [
                'category' => 'Speakers',
            ],
        ]);
    }
}
