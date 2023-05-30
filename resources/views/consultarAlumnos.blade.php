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
                <input type="text" class="form-control" name="nombre" value="{{request()->get('nombre','')}}" required>
            </div>
            <div style="width: 8%; display: inline-block;">
                <input type="submit" value="Buscar" class="btn btn-secondary" style="margin-bottom: 4px;">
            </div>
        </div>
    </form>  
    @if($alumno != null)
    <div class="responsive-table">
        <table class="table table-hover" style="text-align: center;">
            <thead>
                <tr>
                    <th style="width: 20px"></th>
                    <th>Num. de cotrol</th>
                    <th>Nombre Completo</th>
                    <th>Especialidad</th>
                    <th>Turno</th>
                    <th>Generación</th>
                    <th>Grupo</th>
                    <th>Sexo</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumno as $a)
                <tr>
                    <td>
                        <button onclick="copiarNumControl()">
                            <i class="far fa-file" id="botonCopiar"></i>
                        </button> 
                    </td>
                    <td id="numeroControlCopiar">
                        {{$a->numero_control}}
                    </td>
                    <td>{{ucwords(mb_convert_case($a->nombre_completo, MB_CASE_LOWER, "UTF-8"))}}</td>
                    <td>{{ucwords(mb_convert_case($a->carrera, MB_CASE_LOWER, "UTF-8"))}}</td>
                    <td>{{ucwords(mb_convert_case($a->turno, MB_CASE_LOWER, "UTF-8"))}}</td>
                    <td>{{$a->generacion}}</td>
                    <td>{{$a->grupo}}</td>
                    <td>{{$a->sexo}}</td>
                    <td>
                        <a href="{{url('consultar/expediente/')}}/{{$a->numero_control}}" class="btn btn-info btn-sm">
                            <i class="fas fa-book-open"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
@stop
