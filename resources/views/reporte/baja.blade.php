@extends('app')

@section('titulo')
    <h1>Formato baja</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Formato baja</li>
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
            <label for="">Turno:</label><br>
        </div>
        <div class="form-group">
            <label for="">Motivo</label>
            <input type="text" class="form-control">
        </div>
        <div style="text-align:right;">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ asset('/home') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop
