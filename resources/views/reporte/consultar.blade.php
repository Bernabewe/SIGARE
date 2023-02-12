@extends('app')

@section('titulo')
    <h1>Consultar Alumnos</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Consultar Alumnos</li>
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
                <tr>
                    <td>2</td>
                    <td>12345678910</td>
                    <td>Juan</td>
                    <td>Programación</td>
                    <td>Indvidual</td>
                    <td>Maria</td>
                    <td>12/02/2023</td>
                    <td>
                        <a href="{{ url('reporte/pdf') }}" class="btn btn-success btn-sm">
                            <i class="far fa-file-pdf"></i>
                        </a>
                        <a href="" class="btn btn-primary btn-sm">
                            <i class="far fa-edit"></i>
                            <!-- <i class="fas fa-pencil-alt"></i> -->
                        </a>
                        <a href="" class="btn btn-danger btn-sm">
                            <i class="fas fa-times"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@stop
