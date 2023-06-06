@extends('app')

@section('titulo')
    <h1>Expediente de {{ucwords(mb_convert_case($alumno->nombre, MB_CASE_LOWER, "UTF-8"))}}</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Expediente de {{ucwords(mb_convert_case($alumno->nombre, MB_CASE_LOWER, "UTF-8"))}}</li>
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
                    <b>Número de Control </b> <p class="float-right">{{$alumno->numero_control}}</p><hr style="border-top: 1px solid grey;">
                    <b>Especialidad </b>      <p class="float-right">{{ucwords(mb_convert_case($alumno->carrera, MB_CASE_LOWER, "UTF-8"))}}</p><hr style="border-top: 1px solid gray;">
                    <b>Turno </b>             <p class="float-right">{{ucwords(mb_convert_case($alumno->turno, MB_CASE_LOWER, "UTF-8"))}}</p><hr style="border-top: 1px solid gray;">
                    <b>Grupo </b>             <p class="float-right">{{$alumno->grupo}}</p><hr style="border-top: 1px solid gray;">
                    <b>Generación</b>         <p class="float-right">{{$alumno->generacion}}</p><hr style="border-top: 1px solid gray;">
                    <b>Sexo </b>              <p class="float-right">{{$alumno->sexo}}</p><hr style="border-top: 1px solid gray;">
                    <p class="float-right"><a class="btn btn-primary" href="{{ url('reporte/pdfExpediente/') }}/{{ $alumno->numero_control }}" target="_blank">Convertir a PDF</a></p> 
                </div>
            </div>
        </div>
        <div class="col-sm-8">
        @if(count($tipos) < 1)
            <p style="text-align: center; font-size: 18px"><i> No hay reportes para mostrar </i></p>   
        @endif
        <div class="row">
        @foreach ($tipos as $t)
            <div class="col-sm-6">
                <div class="card card-outline card-dark" style="border-top: 3px solid #722C2C;">
                    <div class="card-header">
                        <h3 class="card-title">{{$t->nombre}}</h3>
                        <div class="card-tools">
                            <span class="badge" style="text-align: right; font-size: 18px;">
                            {{count($t->reportes)}}
                            @if($t->nombre == "Carta Buena Conducta")
                                <button type="button" class="btn btn-success" style="margin-bottom: 1px"></button>
                            @else 
                                @if(count($t->reportes) < 3)
                                    <button type="button" class="btn btn-success" style="margin-bottom: 1px"></button>
                                @elseif(count($t->reportes) < 5)
                                    <button type="button" class="btn btn-warning" style="margin-bottom: 1px"></button>
                                @else
                                    <button type="button" class="btn btn-danger" style="margin-bottom: 1px"></button>
                                @endif
                            @endif
                            </span>
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
                                    <a href="{{ url('reporte/pdf') }}/{{$r->id}}" class="btn btn-primary btn-sm" target="_blank">
                                    <i class="far fa-eye" style="font-size: 16px"></i>
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
    </div>
</div>
@stop
