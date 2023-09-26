<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Daddy Admin', 
                'email' => 'capral96@gmail.com', 
                'password' => Hash::make('SuperSecurePassword'), 
                'role' => 'admin',
                'status' => 'active', 
            ],

            [
                'name' => 'First User', 
                'email' => 'ihorpoberezhnii@gmail.com', 
                'password' => Hash::make('SecurePassword'), 
                'role' => 'user',
                'status' => 'active', 
            ],
        ]);
    }
}
