<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function home(){
        $users = Reporte::select(DB::raw("COUNT(*) as count"), DB::raw("tipo_id as tipo"))
        ->groupBy(DB::raw("tipo"))
        ->orderBy('id','ASC')
        ->pluck('count', 'tipo');

        $labels = $users->keys();
        $data = $users->values();

        return view('home', compact('labels', 'data'));
    }
}
