@extends('app')

@section('titulo')
    <h1>Carta de buena conducta</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Carta buena conducta</li>
@stop

@section('contenido')
    <form action="{{url('/reporte/cartaBuenaConducta')}}" method="POST">
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
    <form action="{{url('/reporte/cartaBuenaConducta/guardar')}}" class="mt-4" method="POST">
        @csrf
        <input type="hidden" value="{{$alumno->id}}" name="id">
        <div style="padding-left: 15px; margin-bottom: 20px;">
            <label for="">Nombre: {{$alumno->nombre_completo}}</label><br>
            <label for="">Grupo: {{$alumno->grupo}}</label><br>
            <label for="">Especialidad: {{$alumno->carrera}}</label><br>
            <label for="">Generación: {{$alumno->generacion}}</label><br>
        </div>
        <div style="text-align:right;">
            <input value="Guardar" type="submit" class="btn btn-primary">
            <a href="{{ asset('/home') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
    @endif
@stop
