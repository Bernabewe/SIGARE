<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Reporte;
use App\Models\Detalle;
use Carbon\Carbon;

class ReporteController extends Controller
{
    public function consultar(){
        $reportes= Reporte::with(['detalle', 'tipo'])->get();
        return view('reporte.consultar', compact('reportes') );
    }
    public function eliminar($id){
        $reporte=Reporte::find($id);
        $reporte->delete();
        return redirect('reporte/consultar');
    }

    //Reporte individual - Funciones para vistas
    public function registrarIndividual(){
        $alumno=null;
        return view('reporte.individual', compact('alumno'));
    }
    public function registrarIndividualBuscar(Request $datos){
        $numero_control=$datos->input('numero_control');
        $alumno=Alumno::where('numero_control', '=', $numero_control )->first();
        return view('reporte.individual', compact('alumno'));
    }
    public function registrarIndividualGuardar(Request $datos){
        $alumno=Alumno::find($datos->input('id'));
        $reporte_detalle=Detalle::create([
            'motivo'            =>$datos->input('motivo'),
            'numero_control'    =>$alumno->numero_control
        ]); 
        Reporte::create([
            'tipo_id'=>8, 
            'detalle_id'=>$reporte_detalle->id,
            'user_id'=>1,
            'fecha'=>Carbon::now(),
            'especialidad'=>$alumno->carrera,
            'grupo'=>$alumno->grupo,
            'turno'=>$alumno->turno,
            'generacion'=>$alumno->generacion
        ]);
        return redirect('/reporte/consultar');
    }
    public function editarIndividual($id){
        $reporte=Reporte::find($id);
        $detalle=Detalle::where('id', '=', $reporte->detalle_id)->first();
        $alumno=Alumno::where('numero_control', '=', $detalle->numero_control)->first();
        $tipo=$reporte->tipo_id;
        if($tipo = 8){
            return view('reporte.editarIndividual', compact('reporte', 'detalle', 'alumno'));
        }
        elseif($tipo = 2){
            return view('home', compact('reporte', 'detalle', 'alumno'));
        }
        
    }
    public function actualizarIndividual(Request $datos, $id){
        $reporte=Reporte::find($id);
        $detalle=Detalle::where('id', '=', $reporte->detalle_id)->first();
        $alumno=Alumno::where('numero_control', '=', $detalle->numero_control)->first();
        $reporte->fecha         =Carbon::now();
        $reporte->especialidad  =$alumno->carrera;
        $reporte->grupo         =$alumno->grupo;
        $reporte->turno         =$alumno->turno;
        $reporte->generacion    =$alumno->generacion;
        $reporte->save();
        $detalle->motivo        =$datos->input('motivo');
        $detalle->save();


        return redirect('/reporte/consultar');
    }   

    //Reporte grupal - Funciones para vistas
    public function registrarGrupal(){
        
        return view('reporte.grupal');
    }

    //Justificante - Funciones para vistas
    public function registrarJustificante(){
        $alumno=null;
        return view('reporte.justificante', compact('alumno'));
    }
    public function registrarJustificanteBuscar(Request $datos){
        $numero_control=$datos->input('numero_control');
        $alumno=Alumno::where('numero_control', '=', $numero_control )->first();
        return view('reporte.justificante', compact('alumno'));
    }
    public function registrarJustificanteGuardar(Request $datos){
        $alumno=Alumno::find($datos->input('id'));
        $reporte_detalle=Detalle::create([
            'motivo'            =>$datos->input('motivo'),
            'fecha_inicial'     =>$datos->input('fecha_inicial'),
            'fecha_final'       =>$datos->input('fecha_final'),
            'numero_control'    =>$alumno->numero_control
        ]);
        Reporte::create([
            'tipo_id'           =>3, 
            'detalle_id'        =>$reporte_detalle->id,
            'user_id'           =>1,
            'fecha'             =>Carbon::now(),
            'especialidad'      =>$alumno->carrera,
            'grupo'             =>$alumno->grupo,
            'turno'             =>$alumno->turno,
            'generacion'        =>$alumno->generacion
        ]);
        return redirect('/reporte/consultar');
    }

    //Baja - Funciones para vistas
    public function registrarBaja(){
        $alumno=null;
        return view('reporte.baja', compact('alumno'));
    }
    public function registrarBajaBuscar(Request $datos){
        $numero_control=$datos->input('numero_control');
        $alumno=Alumno::where('numero_control', '=', $numero_control )->first();
        return view('reporte.baja', compact('alumno'));
    }
    public function registrarBajaGuardar(Request $datos){
        $alumno=Alumno::find($datos->input('id'));
        $reporte_detalle=Detalle::create([
            'motivo'            =>$datos->input('motivo'),
            'numero_control'    =>$alumno->numero_control
        ]);
        Reporte::create([
            'tipo_id'           =>2, 
            'detalle_id'        =>$reporte_detalle->id,
            'user_id'           =>1,
            'fecha'             =>Carbon::now(),
            'especialidad'      =>$alumno->carrera,
            'grupo'             =>$alumno->grupo,
            'turno'             =>$alumno->turno,
            'generacion'        =>$alumno->generacion
        ]);
        return redirect('/reporte/consultar');
    }

    //Carta buena conducta - Funciones para vistas
    public function registrarCartaBuenaConducta(){
        $alumno=null;
        return view('reporte.cartaBuenaConducta', compact('alumno'));
    }
    public function registrarCartaBuenaConductaBuscar(Request $datos){
        $numero_control=$datos->input('numero_control');
        $alumno=Alumno::where('numero_control', '=', $numero_control )->first();
        return view('reporte.cartaBuenaConducta', compact('alumno'));
    }
    public function registrarCartaBuenaConductaGuardar(Request $datos){
        $alumno=Alumno::find($datos->input('id'));
        $reporte_detalle=Detalle::create([
            'numero_control'    =>$alumno->numero_control
        ]);
        Reporte::create([
            'tipo_id'           =>4, 
            'detalle_id'        =>$reporte_detalle->id,
            'user_id'           =>1,
            'fecha'             =>Carbon::now(),
            'especialidad'      =>$alumno->carrera,
            'grupo'             =>$alumno->grupo,
            'turno'             =>$alumno->turno,
            'generacion'        =>$alumno->generacion
        ]);
        return redirect('/reporte/consultar');
    }

    //Carta condicional - Funciones para vistas
    public function registrarCartaCondicional(){
        
        return view('reporte.cartaCondicional');
    }

    //Carta compromiso - Funciones para vistas
    public function registrarCartaCompromiso(){
        
        return view('reporte.cartaCompromiso');
    }

    //Canalizacion - Funciones para vistas
    public function registrarCanalizacion(){
        
        return view('reporte.canalizacion');
    }
}
