<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //Admin
       User::create([
        'name' => 'Admin',
        'email' => 'admin@prueba.com',
        'password' => bcrypt('12345678'),
        'role' => 0
       ]);
        //Support
       User::create([
        'name' => 'Support',
        'email' => 'support@prueba.com',
        'password' => bcrypt('12345678'),
        'role' => 1
       ]);
        //Student
       User::create([
        'name' => 'Admin',
        'email' => 'student@prueba.com',
        'password' => bcrypt('12345678'),
        'role' => 2
       ]);
           
    }
}
