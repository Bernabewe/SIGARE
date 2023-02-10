@extends('app')

@section('titulo')
    <h1>Carta compromiso</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Carta compromsio </li>
@stop

@section('contenido')
    <form action="">
        <div class="form-group">
            <label for="">Número de control del alumno</label>
            <input type="number" class="form-control">
        </div>
        <div style="text-align:left; padding-left: 15px;">
            <label for="">Nombre:</label><br>
            <label for="">Grupo:</label><br>
            <label for="">Especialidad:</label><br>
        </div>
        <div class="form-group">
            <label for="">Motivo(falta del alumno)</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nombre del padre, madre o tutor</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Compromisos (Separar cada compromiso por comas)</label>
            <input type="text" class="form-control">
        </div>
        <div style="text-align:right;">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ asset('/home') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop
