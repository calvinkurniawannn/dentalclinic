<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'calvin',
            'email' => 'calvin@gmail.com',
            'phone' => '08111255516',
            'password' => bcrypt('calvin'),
            'dob' =>  '2000-01-01',
            'gender' => 'Laki-laki',
            'role' => 'user'
        ]);

        DB::table('users')->insert([
            'name' => 'jeje',
            'email' => 'jeje@gmail.com',
            'phone' => '08111255516',
            'password' => bcrypt('jeje'),
            'dob' =>  '2000-01-01',
            'gender' => 'Laki-laki',
            'role' => 'user'
        ]);

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => '08111255511',
            'password' => bcrypt('admin'),
            'dob' =>  '2000-01-01',
            'gender' => 'Laki-laki',
            'role' => 'admin'
        ]);
 
    }
}