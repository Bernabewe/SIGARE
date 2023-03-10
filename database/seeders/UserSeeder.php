<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sebastian',
            'email' => 'sebastiancoronel425@gmail.com',
            'password' => bcrypt('sebas123')
        ])->assignRole('administrador');

        User::create([
            'name' => 'Bernardo',
            'email' => 'Bernardo@gmail.com',
            'password' =>  bcrypt('bernardo123')
        ])->assignRole('orientador');

        User::create([
            'name' => 'Paulo',
            'email' => 'paulo@gmail.com',
            'password' =>  bcrypt('paulo123')
        ])->assignRole('orientador');
    }
}
