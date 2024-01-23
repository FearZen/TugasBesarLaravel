<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // insert data to users table
        \DB::table('users')->insert([
            'name' => 'nunski',
            'email' => 'nunski123@gmail.com',
            'password' => bcrypt('Nunski123'),
        ]);
    }
}
