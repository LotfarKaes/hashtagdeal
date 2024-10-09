<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        

        DB::table('users')->insert([
            //Admin 
            [
                'name' => 'Admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active',

            ],
              //Sales 
            [
                'name' => 'Ariyan',
                'username' => 'sales',
                'email' => 'sales@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'sales',
                'status' => 'active',

            ],
              //Companies
            [
                'name' => 'AB',
                'username' => 'companies',
                'email' => 'companies@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'companies',
                'status' => 'active',

            ],


        ]);

    }
}