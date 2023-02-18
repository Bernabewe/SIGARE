<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\Alumno;

class ReporteController extends Controller
{
    public function consultar(){
        $alumnos= Alumno::all();
        return view('reporte.consultar', compact('alumnos') );
    }
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
        $alumnos = array("Alumno1", "Alumno2", "Alumno3"); //DAtos de la base de datos
        PDF::SetPaper('A4', 'landscape'); //Configuracion de la libreria
        $pdf = PDF::loadView('PDF.PDFreporteIndividual', array('alumnos' => $alumnos)); //Carga la vista y la convierte a PDF
        return $pdf->download("PDFreporteIndividual.pdf"); //Descarga el PDF con ese nombre
    }
    public function pdfJustificante(){
        $pdf = PDF::loadView('PDF.PDFjustificante');//Carga la vista y la convierte a PDF
        return $pdf->download("PDFjustificante.pdf"); //Descarga el PDF con ese nombre
    }
    public function pdfBaja(){
        $pdf = PDF::loadView('PDF.PDFbaja');//Carga la vista y la convierte a PDF
        return $pdf->download("PDFbaja.pdf"); //Descarga el PDF con ese nombre
    }
    public function pdfReporteGrupal(){
        $pdf = PDF::loadView('PDF.PDFreporteGrupal');//Carga la vista y la convierte a PDF
        return $pdf->download("PDFreporteGrupal.pdf"); //Descarga el PDF con ese nombre
    }
    public function pdfCartaCondicional(){
        $pdf = PDF::loadView('PDF.PDFcartaCondicional');//Carga la vista y la convierte a PDF
        return $pdf->download("PDFcartaCondicional.pdf"); //Descarga el PDF con ese nombre
    }
}
