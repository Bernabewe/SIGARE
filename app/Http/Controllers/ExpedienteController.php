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
            $query->whereHas('detalle', function ($query) use($nc){
                $query->where('numero_control', $nc)->with('detalle');
            });
        })->with('reportes')->get();

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
}
