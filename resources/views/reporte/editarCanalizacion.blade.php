@extends('app')

@section('titulo')
    <h1>Canalización</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Canalización </li>
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
    <form action="{{url('/reporte/canalizacion/actualizar')}}/{{$reporte->id}}" method="POST">
            @csrf
            <input type="hidden" value="{{$alumno->id}}" name="id">
            <div style="text-align:left; padding-left: 15px;">
                <label for="">Nombre: {{$alumno->nombre_completo}}</label><br>
                <label for="">Grupo: {{$alumno->grupo}}</label><br>
                <label for="">Especialidad: {{$alumno->carrera}}</label><br>
                <label for="">Turno: {{$alumno->turno}}</label>
            </div>
            <div class="form-group">
                <label for="">Motivo (Especifiqué el problema)</label>
                <input value="{{$reporte->detalle->motivo}}" type="text" class="form-control" name="motivo">
            </div>
            
            <div class="form-group">
                <label for="">Nombre del padre, madre o tutor</label>
                <input value="{{$reporte->detalle->tutor}}" type="text" class="form-control" name="tutor">
            </div>
            <div class="form-group">
                <label for="">Domicilio</label>
                <input value="{{$reporte->detalle->domicilio}}" type="text" class="form-control" name="domicilio">
            </div>
            <div class="form-group">
                <label for="">Área de canalización</label>
                <input value="{{$reporte->detalle->area_canalizacion}}" type="text" class="form-control" name="area_canalizacion">
            </div>
            <div class="form-group">
                <label for="">Observaciones</label>
                <input value="{{$reporte->detalle->observaciones}}" type="text" class="form-control" name="observaciones">
            </div>
            <div style="text-align:right;">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ asset('/reporte/consultar') }}" class="btn btn-danger">Cancelar</a>
            </div>
    </form>
@stop
