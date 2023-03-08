@extends('app')

@section('titulo')
    <h1>Consultar Alumnos</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Consultar Alumnos</li>
@stop

@section('contenido')
    <form action="{{url('/consultar/alumno')}}" method="POST">
        @csrf
        <div style="width: 100%;">
            <div class="form-group" style="width: 50%; display: inline-block;">
                <label for="">Nombre completo del alumno</label>
                <input type="text" class="form-control" name="nombre" placeholder="Comience por apelidos" value="{{request()->get('nombre','')}}" required>
            </div>
            <div style="width: 8%; display: inline-block;">
                <input type="submit" value="Buscar" class="btn btn-secondary">
            </div>
        </div>
    </form>
    @if($alumno != null)
    <div class="responsive-table">
        <table class="table table-hover" style="text-align: center;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Num. de cotrol</th>
                    <th>Nombre Completo</th>
                    <th>Especialidad</th>
                    <th>Turno</th>
                    <th>Generación</th>
                    <th>Grupo</th>
                    <th>Sexo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$alumno->id}}</td>
                    <td>{{$alumno->numero_control}}</td>
                    <td>{{ucwords(mb_convert_case($alumno->nombre_completo, MB_CASE_LOWER, "UTF-8"))}}</td>
                    <td>{{ucwords(mb_convert_case($alumno->carrera, MB_CASE_LOWER, "UTF-8"))}}</td>
                    <td>{{ucwords(mb_convert_case($alumno->turno, MB_CASE_LOWER, "UTF-8"))}}</td>
                    <td>{{$alumno->generacion}}</td>
                    <td>{{$alumno->grupo}}</td>
                    <td>{{$alumno->sexo}}</td>
                </tr>
            </tbody>
        </table>
    </div>
    @endif
@stop