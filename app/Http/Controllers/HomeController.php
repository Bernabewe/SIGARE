<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use Illuminate\Http\Request;
use App\Models\Alumno;
use Carbon\Carbon;
use DB;

class HomeController extends Controller
{
    public function home(){
        $hoy=Carbon::now()->format('Y-m-d');
        $alumnos=Alumno::all();
        $reportes=Reporte::where('created_at', '>=', $hoy)->get();
        $users = Reporte::select(DB::raw("COUNT(*) as count"), DB::raw("tipo_id as tipo"))
        ->groupBy(DB::raw("tipo"))
        ->orderBy('id','ASC')
        ->pluck('count', 'tipo');

        $labels = $users->keys();
        $data = $users->values();

        return view('home', compact('labels', 'data', 'alumnos', 'reportes'));
    }
}