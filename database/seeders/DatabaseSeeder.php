<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\AlumnoSeeder;
use Database\Seeders\TipoReporteSeeder;
use Database\Seeders\DetalleSeeder;
use Database\Seeders\ReporteSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AlumnoSeeder::class);
        $this->call(TipoReporteSeeder::class);
        $this->call(DetalleSeeder::class);
        $this->call(ReporteSeeder::class);
    }
}
