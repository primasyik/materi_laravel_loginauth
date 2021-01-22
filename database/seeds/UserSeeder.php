<?php

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
        \App\User::truncate();
        \App\User::create([
            'name' => 'Prima Wirawan',
            'level' => 'user',
            'email' => 'prima@mail.test',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(60),
        ]);
        \App\User::create([
            'name' => 'Admin',
            'level' => 'admin',
            'email' => 'admin@mail.test',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(60),
        ]);
    }
}
