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
        TipoReporte::create([ 'nombre' => 'grupal' ]);
        TipoReporte::create([ 'nombre' => 'baja' ]);
        TipoReporte::create([ 'nombre' => 'justificante' ]);
        TipoReporte::create([ 'nombre' => 'cartaBuenaConducta' ]);
        TipoReporte::create([ 'nombre' => 'cartaCondicional' ]);
        TipoReporte::create([ 'nombre' => 'cartaCompromiso' ]);
        TipoReporte::create([ 'nombre' => 'Canalizacion' ]);
        TipoReporte::create([ 'nombre' => 'individual' ]);
    }
}
