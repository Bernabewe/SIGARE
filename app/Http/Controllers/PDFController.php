<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reporte;
use App\Models\Alumno;
use Carbon\Carbon;
use PDF;

class PDFController extends Controller
{
    
    public function pdfMaster($id){
        $folio=Carbon::now()->format('Y')."/".$id;
        $meses=array('', 'Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        $reporte=Reporte::with('detalle')->find($id);
        $alumno=Alumno::where('numero_control', '=', $reporte->detalle->numero_control)->first();
        $tipo=$reporte->tipo_id;
        $fecha=Carbon::now()->format('d')." de ". $meses[intval(Carbon::now()->format('m'))]." de ".Carbon::now()->format('Y');
        if($tipo==8){
            return $this->pdfIndividual($reporte, $alumno, $fecha, $folio);
        }
        elseif($tipo==1){
            return $this->pdfGrupal($reporte, $alumno, $fecha, $folio);
        }
        elseif($tipo==2){
            return $this->pdfBaja($reporte, $alumno, $fecha, $folio);
        }
        elseif($tipo==3){
            return $this->pdfJustificante($reporte, $alumno, $fecha, $folio);
        }
        elseif($tipo==4){
            return $this->pdfCartaBuenaConducta($reporte, $alumno, $fecha, $folio);
        }
        elseif($tipo==5){
            return $this->pdfCartaCondicional($reporte, $alumno, $fecha, $folio);
        }
        elseif($tipo==6){
            return $this->pdfCartaCompromiso($reporte, $alumno, $fecha, $folio);
        }
        else{
            return $this->pdfCanalizacion($reporte, $alumno, $fecha, $folio);
        }
    }
    public function pdfIndividual(Reporte $reporte, Alumno $alumno, $fecha, $folio){
        $pdf = PDF::loadView('PDF.PDFreporteIndividual', array('alumno' => $alumno, 'reporte' => $reporte, 'fecha' => $fecha, 'folio' => $folio));
        return $pdf->download("PDFreporteIndividual.pdf");
    }
    public function pdfJustificante(Reporte $reporte, Alumno $alumno, $fecha, $folio){
        $pdf = PDF::loadView('PDF.PDFjustificante', array('alumno' => $alumno, 'reporte' => $reporte, 'fecha' => $fecha, 'folio' => $folio));
        return $pdf->download("PDFjustificante.pdf");
    }
    public function pdfBaja(Reporte $reporte, Alumno $alumno, $fecha, $folio){
        $pdf = PDF::loadView('PDF.PDFbaja', array('alumno' => $alumno, 'reporte' => $reporte, 'fecha' => $fecha, 'folio' => $folio));
        return $pdf->download("PDFbaja.pdf");
    }
    public function pdfGrupal(Reporte $reporte, $fecha, $folio){
        $pdf = PDF::loadView('PDF.PDFreporteGrupal', array('reporte' => $reporte, 'fecha' => $fecha, 'folio' => $folio));
        return $pdf->download("PDFreporteGrupal.pdf");
    }
    public function pdfCanalizacion(Reporte $reporte, Alumno $alumno, $fecha, $folio){
        $pdf = PDF::loadView('PDF.PDFcanalizacion', array('alumno' => $alumno, 'reporte' => $reporte, 'fecha' => $fecha, 'folio' => $folio));
        return $pdf->download("PDFcanalizaion.pdf"); 
    }
    public function pdfCartaCompromiso(Reporte $reporte, Alumno $alumno, $fecha, $folio){
        $pdf = PDF::loadView('PDF.PDFcartaCompromiso', array('alumno' => $alumno, 'reporte' => $reporte, 'fecha' => $fecha, 'folio' => $folio));
        return $pdf->download("PDFcartaCompromiso.pdf"); 
    }
    public function pdfCartaBuenaConducta(Reporte $reporte, Alumno $alumno, $fecha, $folio){
        $pdf = PDF::loadView('PDF.PDFcartaBuenaConducta', array('alumno' => $alumno, 'reporte' => $reporte, 'fecha' => $fecha, 'folio' => $folio));
        return $pdf->download("PDFcartaBuenaConducta.pdf"); 
    }
    public function pdfCartaCondicional(Reporte $reporte, Alumno $alumno, $fecha, $folio){
        $pdf = PDF::loadView('PDF.PDFcartaCondicional', array('alumno' => $alumno, 'reporte' => $reporte, 'fecha' => $fecha, 'folio' => $folio));
        return $pdf->download("PDFcartaCondicional.pdf");
    }
}
