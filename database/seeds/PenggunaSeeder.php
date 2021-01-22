<?php

use Illuminate\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Pengguna::truncate();
        \App\Pengguna::create([
            'name' => 'Siti Amelia',
            'email' => 'sitiamelia@mail.test',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(60),
        ]);
        \App\User::create([
            'name' => 'Cherika',
            'email' => 'cherika@mail.test',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(60),
        ]);
    }
}
