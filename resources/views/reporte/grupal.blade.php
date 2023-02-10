@extends('app')

@section('titulo')
    <h1>Reporte grupal</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Reporte grupal</li>
@stop

@section('contenido')
    <form action="">
        <div class="form-group">
            <label for="">Seleccione el grupo a reportar</label>
            <input type="text" class="form-control">
        </div>
        <div style="text-align:left; padding-left: 15px;">
            <label for="">Grupo:</label><br>
            <label for="">Especialidad:</label><br>
            <label for="">Turno:</label><br>
        </div>
        <div class="form-group">
            <label for="">Motivo</label>
            <input type="textarea" class="form-control">
        </div>
        <div style="text-align:right;">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ asset('/home') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop
