<?php

namespace Database\Seeders;

use App\Models\Alumno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno::create([
            'nombre'    => 'Juan Parez',
            'edad'      => 18,
            'grupo'     =>'6AVP',
            'sexo'      => true,
        ]); 
        Alumno::create([
            'nombre'    => 'Silvia Montaño',
            'edad'      => 17,
            'grupo'     =>'4AVO',
            'sexo'      => false,
        ]);
        Alumno::create([
            'nombre'    => 'Maria Magdalena',
            'edad'      => 16,
            'grupo'     =>'2AMP',
            'sexo'      => false,
        ]);
        Alumno::create([
            'nombre'    => 'Paulo Camargo',
            'edad'      => 18,
            'grupo'     =>'6AVCO',
            'sexo'      => true,
        ]);
        Alumno::create([
            'nombre'    => 'Karla Jimenez',
            'edad'      => 17,
            'grupo'     =>'4AMP',
            'sexo'      => false,
        ]);
        
    }
}
