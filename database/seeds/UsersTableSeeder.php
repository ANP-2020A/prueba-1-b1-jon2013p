<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {

        User::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make('12345');

        User::create([
            'name' => 'Administrador',
            'email' => 'admin@prueba.com',
            'password' => $password,
        ]);

        for ($i = 0; $i<20; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker-> email,
                'password' => $password
            ]);
        }
    }
}
