<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use App\Models\TipoReporte;
use Illuminate\Http\Request;

class ExpedienteController extends Controller
{

    public function consultarExpediente($nc){

        $tipos= TipoReporte::whereHas('reportes', function($query) use($nc){
            $query->whereHas('detalle', function ($query) use($nc){
                $query->where('numero_control', $nc)->with('detalle');
            });
        })->with('reportes')->get();

        dd($tipos);

        $reportes=Reporte::whereHas('detalle', function($query) use($nc){
            $query->where('numero_control', $nc);
        })->get();

        dd($reportes);
    }
}
