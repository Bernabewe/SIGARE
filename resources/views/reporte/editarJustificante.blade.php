@extends('app')

@section('titulo')
    <h1>Formato Justificante</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Formato justificante</li>
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
    <form action="{{url('/reporte/justificante/actualizar')}}/{{$reporte->id}}" class="mt-4" method="POST">
        @csrf
        <input type="hidden" value="{{$alumno->id}}" name="id">
        <div style="padding-left: 15px; margin-bottom: 20px;">
            <label for="">Nombre: {{$alumno->nombre_completo}}</label><br>
            <label for="">Grupo: {{$alumno->grupo}}</label><br>
            <label for="">Especialidad: {{$alumno->carrera}}</label><br>
            <label for="">Turno: {{strtoupper($alumno->turno)}}</label><br>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-6">
                    <label for="">Inasistencia del día</label>
                    <input value="{{$reporte->detalle->fecha_inicial}}" type="date" class="form-control" name="fecha_inicial">
                </div>
                <div class="col-sm-6">
                    <label for="">Al día</label>
                    <input value="{{$reporte->detalle->fecha_final}}" type="date" class="form-control" name="fecha_final">
                </div>        
            </div>
        </div>
        <div class="form-group">
            <label for="">Motivo</label>
            <input  value="{{$reporte->detalle->motivo}}" type="text" class="form-control" name="motivo">
        </div>
        <div style="text-align:right;">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ asset('/reporte/consultar') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop
