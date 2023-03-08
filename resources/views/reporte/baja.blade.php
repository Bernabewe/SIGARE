@extends('app')

@section('titulo')
    <h1>Formato baja</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Formato baja</li>
@stop

@section('contenido')
    <form action="{{url('/reporte/baja')}}" method="POST">
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
    <form action="{{url('/reporte/baja/guardar')}}" class="mt-4" method="POST">
        @csrf
        <input type="hidden" value="{{$alumno->id}}" name="id">
        <div style="padding-left: 15px; margin-bottom: 20px;">
            <label for="">Nombre: {{$alumno->nombre_completo}}</label><br>
            <label for="">Grupo: {{$alumno->grupo}}</label><br>
            <label for="">Especialidad: {{$alumno->carrera}}</label><br>
            <label for="">Turno: {{strtoupper($alumno->turno)}}</label><br>
        </div>
        <div class="form-group">
            <label for="">Motivo</label>
            <input type="text" class="form-control" name="motivo" required>
        </div>
        <div style="text-align:right;">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ asset('/home') }}" class="btn btn-danger">Cancelar</a>
        </div>
    @endif
    </form>
@stop
