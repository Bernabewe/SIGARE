<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipo_Reporte;

class TipoReporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo_Reporte::create([ 'nombre' => 'grupal' ]);
        Tipo_Reporte::create([ 'nombre' => 'baja' ]);
        Tipo_Reporte::create([ 'nombre' => 'justificante' ]);
        Tipo_Reporte::create([ 'nombre' => 'cartaBuenaConducta' ]);
        Tipo_Reporte::create([ 'nombre' => 'cartaCondicional' ]);
        Tipo_Reporte::create([ 'nombre' => 'cartaCompromiso' ]);
        Tipo_Reporte::create([ 'nombre' => 'Canalizacion' ]);
        Tipo_Reporte::create([ 'nombre' => 'individual' ]);
    }
}
