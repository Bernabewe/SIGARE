@extends('app')

@section('titulo')
    <h1>Canalización</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Canalización </li>
@stop

@section('contenido')
    <form action="{{url('/reporte/canalizacion')}}" method="POST">
        @csrf
        <div style="width: 100%;">
            <div class="form-group" style="width: 50%; display: inline-block;">
                <label for="">Número de control del alumno</label>
                <input type="number" class="form-control" name="numero_control" value="{{request()->get('numero_control','')}}" required>
            </div>
            <div style="width: 8%; display: inline-block;">
                <input type="submit" value="Buscar" class="btn btn-secondary">
            </div>
        </div>
    </form>
    @if($alumno != null)
    <form action="{{url('/reporte/canalizacion/guardar')}}" method="POST">
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
                <input type="text" class="form-control" name="motivo" required>
            </div>
            <div class="form-group">
                <label for="">Nombre del padre, madre o tutor</label>
                <input type="text" class="form-control" name="tutor" required>
            </div>
            <div class="form-group">
                <label for="">Domicilio</label>
                <input type="text" class="form-control" name="domicilio" required>
            </div>
            <div class="form-group">
                <label for="">Área de canalización</label>
                <input type="text" class="form-control" name="area_canalizacion" required>
            </div>
            <div class="form-group">
                <label for="">Observaciones</label>
                <input type="text" class="form-control" name="observaciones" required>
            </div>
            <div style="text-align:right;">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ asset('/home') }}" class="btn btn-danger">Cancelar</a>
            </div>
    </form>
    @endif
@stop
