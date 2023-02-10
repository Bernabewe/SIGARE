<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function consultar(){
        //consultas el alumno
        return view('reporte.consultar');
    }
    public function registrarIndividual(){
        //consultas el alumno
        return view('reporte.individual');
    }
    public function registrarGrupal(){
        //consultas el alumno
        return view('reporte.grupal');
    }
    public function registrarJustificante(){
        //consultas el alumno
        return view('reporte.justificante');
    }
    public function registrarBaja(){
        //consultas el alumno
        return view('reporte.baja');
    }
    public function registrarCartaBuenaConducta(){
        //consultas el alumno
        return view('reporte.cartaBuenaConducta');
    }
    public function registrarCartaCondicional(){
        //consultas el alumno
        return view('reporte.cartaCondicional');
    }
    public function registrarCartaCompromiso(){
        //consultas el alumno
        return view('reporte.cartaCompromiso');
    }
    public function registrarCanalizacion(){
        //consultas el alumno
        return view('reporte.canalizacion');
    }
    
    
    public function reportePdf(){
        $alumnos = array("Alumno1", "Alumno2", "Alumno3"); //DAtos de la base de datos
        PDF::SetPaper('A4', 'landscape'); //Configuracion de la libreria
        $pdf = PDF::loadView('PDF.reporteGenerico', array('alumnos' => $alumnos)); //Carga la vista y la convierte a PDF
        return $pdf->download("reporteGenerico.pdf"); //Descarga el PDF con ese nombre
    }
}
