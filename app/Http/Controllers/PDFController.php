<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reporte;
use PDF;

class PDFController extends Controller
{
    public function pdfIndividual(){
        $alumnos = Reporte::where();
        PDF::SetPaper('A4', 'landscape');
        $pdf = PDF::loadView('PDF.PDFreporteIndividual', array('alumnos' => $alumnos));
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
    public function pdfReporteGrupal(){
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
        return $pdf->dowload("PDFcartaCondicional.pdf");
    }
}
