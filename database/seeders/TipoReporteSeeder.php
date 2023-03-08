<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoReporte;

class TipoReporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoReporte::create([ 'nombre' => 'Grupal' ]);
        TipoReporte::create([ 'nombre' => 'Baja' ]);
        TipoReporte::create([ 'nombre' => 'Justificante' ]);
        TipoReporte::create([ 'nombre' => 'Carta Buena Conducta' ]);
        TipoReporte::create([ 'nombre' => 'Carta Condicional' ]);
        TipoReporte::create([ 'nombre' => 'Carta Compromiso' ]);
        TipoReporte::create([ 'nombre' => 'Canalización' ]);
        TipoReporte::create([ 'nombre' => 'Individual' ]);
    }
}
