<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = array(

            // Admin
            array(
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('1111'),
                'role' => 'admin',
                'status' => 'active'
            ),

            // Seller
            array(
                'name' => 'Seller',
                'email' => 'seller@gmail.com',
                'password' => Hash::make('1111'),
                'role' => 'seller',
                'status' => 'active'
            ),

            array(
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('1111'),
                'role' => 'user',
                'status' => 'active'
            ),
        );

        DB::table('users')->insert($data);
    }
}
