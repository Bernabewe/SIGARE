@extends('app')

@section('titulo')
    <h1>Carta de buena conducta</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Carta buena conducta</li>
@stop

@section('contenido')
    <div style="width: 100%;">
        <div class="form-group" style="width: 50%; display: inline-block;">
            <label for="">Número de control del alumno</label>
            <input type="number" class="form-control" name="numero_control" value="{{$reporte->detalle->numero_control}}" disabled>
        </div>
        <div style="width: 8%; display: inline-block;">
            <input type="submit" value="Buscar" class="btn btn-secondary" disabled>
        </div>
    </div>
    <input type="hidden" value="{{$alumno->id}}" name="id">
    <div style="padding-left: 15px; margin-bottom: 20px;">
        <label for="">Nombre: {{$alumno->nombre_completo}}</label><br>
        <label for="">Grupo: {{$alumno->grupo}}</label><br>
        <label for="">Especialidad: {{$alumno->carrera}}</label><br>
        <label for="">Generación: {{$alumno->generacion}}</label><br>
    </div>
    <div style="text-align:right;">
        <a href="{{ asset('/reporte/consultar') }}" class="btn btn-danger">Regresar</a>
    </div>
@stop
