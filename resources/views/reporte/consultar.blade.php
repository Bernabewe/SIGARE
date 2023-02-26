@extends('app')

@section('titulo')
    <h1>Consultar Reportes</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Consultar Reportes</li>
@stop

@section('contenido')
    <div class="responsive-table">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Num. de cotrol</th>
                    <th>Nombre</th>
                    <th>Especialida</th>
                    <th>Tipo de reporte</th>
                    <th>Orientadora</th>
                    <th>Fecha de creación</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody> 
                @foreach($reportes as $r)              
                <tr>
                    <td>{{$r->id}}</td>
                    <td>{{$r->detalle->numero_control}}</td>
                    <td>{{$r->detalle->alumno->nombre}}</td>
                    <td>{{$r->detalle->alumno->carrera}}</td>
                    <td>{{strtoupper($r->tipo->nombre)}}</td>
                    <td>Pendiente Sesión</td>
                    <td>{{$r->created_at}}</td>
                    <td>
                        <a href="{{ url('reporte/pdfIndividual') }}/{{$r->id}}" class="btn btn-success btn-sm">
                            <i class="far fa-file-pdf"></i>
                        </a>
                        <a href="{{url('reporte/Individual/editar')}}/{{$r->id}}" class="btn btn-primary btn-sm">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="{{url('reporte/eliminar')}}/{{$r->id}}" class="btn btn-danger btn-sm">
                            <i class="fas fa-times"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
