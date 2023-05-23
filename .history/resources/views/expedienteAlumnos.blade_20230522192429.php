@extends('app')

@section('titulo')
    <h1>Expediente de -----</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Expediente de -----</li>
@stop

@section('contenido')
<div class="container-fluid m-0">
    <div class="row">
        <div class="col-sm-4">
            <div class="card card-outline card-danger" style="border-top: 3px solid #722C2C;">
                <div class="card-header">
                    <h3 class="card-title">{{ucwords(mb_convert_case($alumno->nombre_completo, MB_CASE_LOWER, "UTF-8"))}}</h3>
                </div>
                <div class="card-body">
                    <b>Número de Control </b>
                    <p>{{$alumno->numero_control}}</p><hr style="border-top: 1px solid grey;">
                    <b>Especialidad </b>
                    <p>{{ucwords(mb_convert_case($alumno->carrera, MB_CASE_LOWER, "UTF-8"))}}</p><hr style="border-top: 1px solid gray;">
                    <b>Turno </b> <p class="float-right">{{ucwords(mb_convert_case($alumno->turno, MB_CASE_LOWER, "UTF-8"))}}</p><hr style="border-top: 1px solid gray;">
                    <b>Grupo </b>  <p class="float-right">{{$alumno->grupo}}</p><hr style="border-top: 1px solid gray;">
                    <b>Generación </b>  <p class="float-right">{{$alumno->generacion}}</p><hr style="border-top: 1px solid gray;">
                    <b>Sexo </b>  <p class="float-right">{{$alumno->sexo}}</p>
                </div>
                <a href="" class="btn btn-primary"></a>
            </div>
        </div>
        @foreach ($tipos as $t)
            <div class="col-sm-4">
                <div class="card card-outline card-dark" style="border-top: 3px solid #722C2C;">
                    <div class="card-header">
                        <h3 class="card-title">{{$t->nombre}}</h3>
                        <div class="card-tools">
                            <span class="badge" style="text-align: right; font-size: 17px;">{{count($t->reportes)}}</span>
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color:#722C2C;">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="responsive-table">
                            <table class="table">
                                <tbody>
                                @foreach($t->reportes as $r)
                                <tr>
                                    <td><b>{{$r->id}}</b></td>
                                    <td>{{$r->usuario->name}}</td>
                                    <td>{{$r->created_at}}</td>
                                    <td>
                                    <a href="{{ url('reporte/pdf') }}/{{$r->id}}" class="btn btn-success btn-sm" target="_blank">
                                    <i class="far fa-eye" style="px"></i>
                                    </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@stop
