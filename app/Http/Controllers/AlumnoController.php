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

        $alumno=Alumno::when($datos->has("nombre"), function($q) use ($datos){
            return $q->where("nombre_completo", "like", "%".$datos->get("nombre")."%");
           })->orderBy('id', 'desc')->paginate(15);

           $alumno->appends($datos->all());

           return view('consultarAlumnos', compact('alumno'));
    }
}
