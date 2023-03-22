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
            'name' => 'Sebastian Coronel',
            'email' => 'sebastian.coronel@dgeti.com.mx',
            'password' => bcrypt('sebas123')
        ])->assignRole('administrador');

        User::create([
            'name' => 'Bernardo Bejarano',
            'email' => 'bernardo.bejarano@dgeti.com.mx',
            'password' =>  bcrypt('bernardo123')
        ])->assignRole('orientador');

        User::create([
            'name' => 'Paulo Irizar',
            'email' => 'paulo.irizar@dgeti.com.mx',
            'password' =>  bcrypt('paulo123')
        ])->assignRole('orientador');

        User::create([
            'name' => 'Prueba Usuario',
            'email' => 'prueba@gmail.com',
            'password' =>  bcrypt('prueba')
        ])->assignRole('orientador');
    }
}
