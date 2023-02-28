@extends('app')

@section('titulo')
    <h1>Carta condicional</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Carta condicional </li>
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
    <form action="{{url('/reporte/cartaCondicional/actualizar')}}/{{$reporte->id}}" method="POST">
        @csrf
        <input type="hidden" value="{{$alumno->id}}" name="id">
        <div style="text-align:left; padding-left: 15px;">
            <label for="">Nombre: {{$alumno->nombre_completo}}</label><br>
            <label for="">Grupo: {{$alumno->grupo}}</label><br>
            <label for="">Especialidad: {{$alumno->carrera}}</label><br>
        </div>
        <div class="form-group">
            <label for="">Motivo</label>
            <input value="{{$reporte->detalle->motivo}}" type="text" class="form-control" name="motivo">
        </div>
        <div class="form-group">
            <label for="">Artículo incumplido  (Separar cada artículo por comas)</label>
            <input value="{{$reporte->detalle->articulo}}" type="text" class="form-control" name="articulo">
        </div>
        <div class="form-group">
            <label for="">Compromisos (Separar cada compromiso por comas)</label>
            <input value="{{$reporte->detalle->compromisos}}" type="text" class="form-control" name="compromisos">
        </div>
        <div style="text-align:right;">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ asset('/reporte/consultar') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop
