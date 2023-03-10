<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reporte;
use App\Models\Alumno;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function home(){
        $hoy=Carbon::now()->format('Y-m-d');
        $alumnos=Alumno::all();
        $reportes=Reporte::where('created_at', '>=', $hoy)->get();
        return view('home', compact('alumnos', 'reportes'));
    }
}