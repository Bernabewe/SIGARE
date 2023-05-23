<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use App\Models\TipoReporte;
use App\Models\Alumno;
use Illuminate\Http\Request;

class ExpedienteController extends Controller
{

    public function consultarExpediente($nc){

        $alumno=Alumno::where('numero_control', '=', $nc)->first();

        dd($alumno->id);

        $tipos= TipoReporte::whereHas('reportes', function($query) use($nc){
            $query->whereHas('detalle', function ($query) use($nc){
                $query->where('numero_control', $nc)->with('detalle');
            });
        })->with('reportes')->get();

        return view('expedienteAlumnos', compact('tipos', 'alumno'));
    }
}
