<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use App\Models\TipoReporte;
use Illuminate\Http\Request;
use App\Models\Alumno;
use Carbon\Carbon;
use DB;

class HomeController extends Controller
{
    public function home(){
        $hoy=Carbon::now()->format('Y-m-d');
        $alumnos=Alumno::all();
        $reportesHoy=Reporte::where('created_at', '>=', $hoy)->get();
        $reportes=Reporte::all();
        $estadistica = DB::table('reportes as r')
        ->select(DB::raw("COUNT(*) as count"), DB::raw("tp.nombre as tipo"))
        ->join('tipo_reportes as tp', 'tp.id', '=', 'r.tipo_id')
        ->groupBy(DB::raw("tipo"))
        ->pluck('count', 'tipo');

        $labels = $estadistica->keys();
        $data = $estadistica->values();


        return view('home', compact('labels', 'data', 'alumnos', 'reportesHoy', 'reportes'));
    }
}
