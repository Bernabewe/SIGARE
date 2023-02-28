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
            return $this->pdfGrupal();
        }
        elseif($tipo==2){
            return $this->pdfBaja();
        }
        elseif($tipo==3){
            return $this->pdfJustificante();
        }
        elseif($tipo==4){
            return $this->pdfCartaBuenaConducta();
        }
        elseif($tipo==5){
            return $this->pdfCartaCondicional();
        }
        elseif($tipo==6){
            return $this->pdfCartaCompromiso();
        }
        else{
            return $this->pdfCanalizacion();
        }
    }
    public function pdfIndividual(Reporte $reporte, Alumno $alumno, $fecha, $folio){
        $pdf = PDF::loadView('PDF.PDFreporteIndividual', array('alumno' => $alumno, 'reporte' => $reporte, 'fecha' => $fecha, 'folio' => $folio));
        return $pdf->download("PDFreporteIndividual.pdf");
    }
    public function pdfJustificante(){
        $pdf = PDF::loadView('PDF.PDFjustificante');
        return $pdf->download("PDFjustificante.pdf");
    }
    public function pdfBaja(){
        $pdf = PDF::loadView('PDF.PDFbaja');
        return $pdf->download("PDFbaja.pdf");
    }
    public function pdfGrupal(){
        $pdf = PDF::loadView('PDF.PDFreporteGrupal');
        return $pdf->download("PDFreporteGrupal.pdf");
    }
    public function pdfCanalizacion(){
        $pdf = PDF::loadView('PDF.PDFcanalizacion');
        return $pdf->download("PDFcanalizaion.pdf"); 
    }
    public function pdfCartaCompromiso(){
        $pdf = PDF::loadView('PDF.PDFcartaCompromiso');
        return $pdf->download("PDFcartaCompromiso.pdf"); 
    }
    public function pdfCartaBuenaConducta(){
        $pdf = PDF::loadView('PDF.PDFcartaBuenaConducta');
        return $pdf->download("PDFcartaBuenaConducta.pdf"); 
    }
    public function pdfCartaCondicional(){
        $pdf = PDF::loadView('PDF.PDFcartaCondicional');
        return $pdf->download("PDFcartaCondicional.pdf");
    }
}
