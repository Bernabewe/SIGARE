<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
/* use App\Models\Alumno; */
use App\Models\Reporte;
class ReporteController extends Controller
{
/*     public function consultar(){
        $alumnos= Alumno::all();
        return view('reporte.consultar', compact('alumnos') );
    } */
    public function registrarIndividual(){
        
        return view('reporte.individual');
    }
    public function registrarGrupal(){
        
        return view('reporte.grupal');
    }
    public function registrarJustificante(){
        
        return view('reporte.justificante');
    }
    public function registrarBaja(){
        
        return view('reporte.baja');
    }
    public function registrarCartaBuenaConducta(){
        
        return view('reporte.cartaBuenaConducta');
    }
    public function registrarCartaCondicional(){
        
        return view('reporte.cartaCondicional');
    }
    public function registrarCartaCompromiso(){
        
        return view('reporte.cartaCompromiso');
    }
    public function registrarCanalizacion(){
        
        return view('reporte.canalizacion');
    }
    
    
    public function pdfIndividual(){
        $alumnos = array("Alumno1", "Alumno2", "Alumno3");
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
        return $pdf->download("PDFcartaCondicional.pdf");
    }
}
