<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;

class AlumnoController extends Controller
{
    public function consultar(){
        $alumno=null;
        return view('consultarAlumnos', compact('alumno'));
    }
    public function buscar(Request $datos){
        $nombre=strtoupper($datos->input('nombre'));
        $alumno=Alumno::where('nombre_completo', '=', $nombre)->first();
        return view('consultarAlumnos', compact('alumno'));

    }
}
