<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
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
        $meses=array('', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        $fecha=Carbon::now()->format('d')." de ". $meses[intval(Carbon::now()->format('m'))]." de ".Carbon::now()->format('Y');
        $tipos= TipoReporte::whereHas('reportes', function($query) use($nc){
            $query->whereHas('detalle', function ($query) use($nc){
                $query->where('numero_control', $nc)->with('detalle');
            });
        })->with('reportes')->get();

        $pdf = PDF::loadView('PDF.PDFexpedienteAlumno', array('tipos' => $tipos, 'alumno' =>$alumno, 'fecha'=> $fecha));
        return $pdf->stream("Expediente".$nc.".pdf");
    }

    public function obtenerNumeroControl($cadena){
        $nc = "0";
        foreach(explode(' ', $cadena) as $c){
            $alumno = Alumno::where('numero_control', $c)->first();
            if($alumno != null){
                $nc = $alumno->numero_control;
            }
        }
        return $nc;
    }
    public function revisarCadena($cadena){
        $contador = 0;
        $groserias = ["Carajo", "Coño", "Joder", "Puta", "Mierda", "Cabrón", "Cabron", "Pendejo",
        "Cagada", "Verga", "Chingar", "carajo", "coño", "joder", "puta", "mierda", "cabron", "cabrón",
        "pendejo", "cagada", "verga", "chingar"];

        $collection = new Collection ($groserias);
        foreach($groserias as $g){
            foreach(explode(' ', $cadena) as $c){
                if($g == $c){
                    $contador = 1;
                    return $contador;
                }
            }
        }
    }
}
