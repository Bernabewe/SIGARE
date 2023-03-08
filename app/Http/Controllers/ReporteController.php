<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Reporte;
use App\Models\Detalle;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

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
    public function editar($id){
        $reporte=Reporte::with('detalle')->find($id);
        $alumno=Alumno::where('numero_control', '=', $reporte->detalle->numero_control)->first();
        $tipo=$reporte->tipo_id;
        if($tipo==8){
            return view('reporte.editarIndividual', compact('reporte', 'alumno'));
        }
        elseif($tipo==1){
            return view('reporte.editarGrupal', compact('reporte'));
        }
        elseif($tipo==2){
            return view('reporte.editarBaja', compact('reporte', 'alumno'));
        }
        elseif($tipo==3){
            return view('reporte.editarJustificante', compact('reporte', 'alumno'));
        }
        elseif($tipo==4){
            return view('reporte.editarBuenaConducta', compact('reporte', 'alumno'));
        }
        elseif($tipo==5){
            return view('reporte.editarCondicional', compact('reporte', 'alumno'));
        }
        elseif($tipo==6){
            return view('reporte.editarCompromiso', compact('reporte', 'alumno'));
        }
        else{
            return view('reporte.editarCanalizacion', compact('reporte', 'alumno'));
        }
    }
    public function actualizar(Request $datos, $id){
        $reporte=Reporte::with('detalle')->find($id);
        $alumno=Alumno::where('numero_control', '=', $reporte->detalle->numero_control)->first();
        $reporte->fecha                     =Carbon::now();
        $reporte->save();
        $reporte->detalle->motivo           =$datos->input('motivo');
        $reporte->detalle->tutor            =$datos->input('tutor');
        $reporte->detalle->fecha_inicial    =$datos->input('fecha_inicial');
        $reporte->detalle->fecha_final      =$datos->input('fecha_final');
        $reporte->detalle->articulo         =$datos->input('articulo');
        $reporte->detalle->compromisos      =$datos->input('compromisos');
        $reporte->detalle->domicilio        =$datos->input('domicilio');
        $reporte->detalle->area_canalizacion=$datos->input('area_canalizacion');
        $reporte->detalle->observaciones    =$datos->input('observaciones');
        $reporte->detalle->save();

        return redirect('/reporte/consultar');
    }

    //Reporte individual - Funciones para vistas
    public function registrarIndividual(){
        $alumno=null;
        return view('reporte.individual', compact('alumno'));
    }
    public function individualBuscar(Request $datos){
        $numero_control=$datos->input('numero_control');
        $alumno=Alumno::where('numero_control', '=', $numero_control )->first();
        return view('reporte.individual', compact('alumno'));
    }
    public function individualGuardar(Request $datos){
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

    //Reporte grupal - Funciones para vistas
    public function registrarGrupal(){
        $grupos=DB::table('alumnos')->select('grupo')->distinct('grupo')->get();
        $turnos=DB::table('alumnos')->select('turno')->distinct('turno')->get();
        $especialidades=DB::table('alumnos')->select('carrera')->distinct('carrera')->get();
        return view('reporte.grupal', compact('grupos', 'turnos', 'especialidades'));
    }
    public function grupalGuardar(Request $datos){
        $reporte_detalle=Detalle::create([
            'motivo'            =>$datos->input('motivo'),
        ]);
        Reporte::create([
            'tipo_id'           =>1,
            'detalle_id'        =>$reporte_detalle->id,
            'user_id'           =>1,
            'fecha'             =>Carbon::now(),
            'especialidad'      =>$datos->input('especialidad'),
            'grupo'             =>$datos->input('grupo'),
            'turno'             =>$datos->input('turno'),
            'generacion'        =>NULL
        ]);
        return redirect('/reporte/consultar');
    }

    //Justificante - Funciones para vistas
    public function registrarJustificante(){
        $alumno=null;
        return view('reporte.justificante', compact('alumno'));
    }
    public function justificanteBuscar(Request $datos){
        $numero_control=$datos->input('numero_control');
        $alumno=Alumno::where('numero_control', '=', $numero_control )->first();
        return view('reporte.justificante', compact('alumno'));
    }
    public function justificanteGuardar(Request $datos){
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
    public function bajaBuscar(Request $datos){
        $numero_control=$datos->input('numero_control');
        $alumno=Alumno::where('numero_control', '=', $numero_control )->first();
        return view('reporte.baja', compact('alumno'));
    }
    public function bajaGuardar(Request $datos){
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
    public function cartaBuenaConductaBuscar(Request $datos){
        $numero_control=$datos->input('numero_control');
        $alumno=Alumno::where('numero_control', '=', $numero_control )->first();
        return view('reporte.cartaBuenaConducta', compact('alumno'));
    }
    public function cartaBuenaConductaGuardar(Request $datos){
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
        $alumno=null;
        return view('reporte.cartaCondicional', compact('alumno'));
    }
    public function cartaCondicionalBuscar(Request $datos){
        $numero_control=$datos->input('numero_control');
        $alumno=Alumno::where('numero_control', '=', $numero_control )->first();
        return view('reporte.cartaCondicional', compact('alumno'));
    }
    public function cartaCondicionalGuardar(Request $datos){
        $alumno=Alumno::find($datos->input('id'));
        $reporte_detalle=Detalle::create([
            'motivo'            =>$datos->input('motivo'),
            'articulo'          =>$datos->input('articulo'),
            'compromisos'       =>$datos->input('compromisos'),
            'numero_control'    =>$alumno->numero_control
        ]);
        Reporte::create([
            'tipo_id'           =>5,
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

    //Carta compromiso - Funciones para vistas
    public function registrarCartaCompromiso(){
        $alumno=null;
        return view('reporte.cartaCompromiso', compact('alumno'));
    }
    public function cartaCompromisoBuscar(Request $datos){
        $numero_control=$datos->input('numero_control');
        $alumno=Alumno::where('numero_control', '=', $numero_control )->first();
        return view('reporte.cartaCompromiso', compact('alumno'));
    }
    public function cartaCompromisoGuardar(Request $datos){
        $alumno=Alumno::find($datos->input('id'));
        $reporte_detalle=Detalle::create([
            'motivo'            =>$datos->input('motivo'),
            'tutor'             =>$datos->input('tutor'),
            'compromisos'       =>$datos->input('compromisos'),
            'numero_control'    =>$alumno->numero_control
        ]);
        Reporte::create([
            'tipo_id'           =>6,
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

    //Canalizacion - Funciones para vistas
    public function registrarCanalizacion(){
        $alumno=null;
        return view('reporte.Canalizacion', compact('alumno'));
    }
    public function canalizacionBuscar(Request $datos){
        $numero_control=$datos->input('numero_control');
        $alumno=Alumno::where('numero_control', '=', $numero_control )->first();
        return view('reporte.Canalizacion', compact('alumno'));
    }
    public function canalizacionGuardar(Request $datos){
        $alumno=Alumno::find($datos->input('id'));
        $reporte_detalle=Detalle::create([
            'motivo'            =>$datos->input('motivo'),
            'tutor'             =>$datos->input('tutor'),
            'domicilio'         =>$datos->input('domicilio'),
            'observaciones'     =>$datos->input('observaciones'),
            'area_canalizacion' =>$datos->input('area_canalizacion'),
            'numero_control'    =>$alumno->numero_control
        ]);
        Reporte::create([
            'tipo_id'           =>7,
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
}
