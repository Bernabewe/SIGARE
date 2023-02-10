@extends('app')

@section('titulo')
    <h1>Reporte individual</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Reporte individual</li>
@stop

@section('contenido')
    <form action="">
        <div class="form-group">
            <label for="">Número de control del alumno</label>
            <input type="number" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Motivo</label>
            <input type="number" class="form-control">
        </div>
        <div style="">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ asset('/home') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop
