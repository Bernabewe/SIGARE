<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Reporte;
use App\Models\TipoReporte;
use Illuminate\Http\Request;
use PDF;


class ExpedienteController extends Controller
{

    public function consultarExpediente($nc){

        $alumno=Alumno::where('numero_control', '=', $nc)->first();

        $tipos= TipoReporte::whereHas('reportes', function($query) use($nc){
            $query->whereHas('detalle', function ($query) use($nc){
                $query->where('numero_control', $nc)->with('detalle');
            });
        })->with('reportes')->get();

        return view('expedienteAlumnos', compact('tipos', 'alumno'));
    }

    public function pdfExpediente($nc){
        $alumno=Alumno::where('numero_control', '=', $nc)->first();

        $tipos= TipoReporte::whereHas('reportes', function($query) use($nc){
            $query->whereHas('detalle', function ($query) use($nc){
                $query->where('numero_control', $nc)->with('detalle');
            });
        })->with('reportes')->get();

        $pdf = PDF::loadView('PDF.ExpedienteAlumno', array('tipos' => $tipos, 'alumno' =>$alumno));
        return $pdf->stream("PDFreporteIndividual.pdf");
    }
}