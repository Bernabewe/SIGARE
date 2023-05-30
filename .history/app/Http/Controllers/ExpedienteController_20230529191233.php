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
            $query->whereRelation('detalle', 'numero_control', '=', $nc);
            $query->whereHas('detalle', function ($query) use($nc){
                $query->where('numero_control', '=', $nc);
            });
        })->get();


        foreach($tipos as $t){
            $t->reportes = Reporte::whereRelation('detalle', 'numero_control', '=', $nc)
                                    ->where('tipo_id', $t->id)->get();
        }

        return view('expedienteAlumnos', compact('tipos', 'alumno'));
    }

    public function pdfExpediente($nc){
        $alumno=Alumno::where('numero_control', '=', $nc)->first();

        $tipos= TipoReporte::whereHas('reportes', function($query) use($nc){
            $query->whereHas('detalle', function ($query) use($nc){
                $query->where('numero_control', $nc)->with('detalle');
            });
        })->with('reportes')->get();

        $pdf = PDF::loadView('PDF.PDFexpedienteAlumno', array('tipos' => $tipos, 'alumno' =>$alumno));
        return $pdf->stream("Expediente".$nc.".pdf");
    }

    public function obtenerNumeroControl($cadena){
        $nc = "vacio";
        foreach(explode(' ', $cadena) as $c){
            $alumno = Alumno::where('numero_control', $c)->first();
            if($alumno != null){
                $nc = $alumno->numero_control;
            }
        }
        return $nc;
    }
}
