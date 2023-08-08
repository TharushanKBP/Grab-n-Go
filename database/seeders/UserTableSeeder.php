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
                'full_name' => 'Aradhana Admin',
                'username' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('11111'),
                'role' => 'admin',
                'status' => 'active'
            ),

            // Customer

            array(
                'full_name' => 'Aradhana Customer',
                'username' => 'Customer',
                'email' => 'customer@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'customer',
                'status' => 'active'
            ),
        );

        DB::table('users')->insert($data);
    }
}
