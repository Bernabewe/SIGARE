@extends('app')

@section('titulo')
    <h1>Expediente de -----</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Expediente de -----</li>
@stop

@section('contenido')
<div class="container">
    <div class="row">
        @foreach ($alumno as $a)
        <div class="card card-outline card-danger" style="border-top: 3px solid #722C2C;">
            <div class="card-header">
                <h3 class="card-title">{{ucwords(mb_convert_case($a->nombre_completo, MB_CASE_LOWER, "UTF-8"))}}</h3>
            </div>
            <div class="card-body">
                <b>Número de Control </b>
                <p>{{$a->numero_control}}</p><hr style="border-top: 1px solid grey;">
                <b>Especialidad </b>
                <p>{{ucwords(mb_convert_case($a->carrera, MB_CASE_LOWER, "UTF-8"))}}</p><hr style="border-top: 1px solid gray;">
                <b>Turno </b> <p class="float-right">{{ucwords(mb_convert_case($a->turno, MB_CASE_LOWER, "UTF-8"))}}</p><hr style="border-top: 1px solid gray;">
                <b>Grupo </b>  <p class="float-right">{{$a->grupo}}</p><hr style="border-top: 1px solid gray;">
                <b>Generación </b>  <p class="float-right">{{$a->generacion}}</p><hr style="border-top: 1px solid gray;">
                <b>Sexo </b>  <p class="float-right">{{$a->sexo}}</p>
            </div>
        </div>
    @endforeach
    </div>
</div>
@stop