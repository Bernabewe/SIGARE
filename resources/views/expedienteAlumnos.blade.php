@extends('app')

@section('titulo')
    <h1>Expediente de -----</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Expediente de -------</li>
@stop

@section('contenido')

            @foreach ($tipos as $t)
                <div class="card card-outline card-dark collapsed-card" style="border-top: 3px solid #722C2C">
                    <div class="card-header">
                        <h3 class="card-title">{{$t->nombre}} {{count($t->reportes)}}</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color:gray;">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                        <div class="card-body" style="display: none;">
                                <div class="info-box">
                                        <div class="responsive-table">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Num. de cotrol</th>
                                                        <th>Nombre</th>
                                                        <th>Especialidad</th>
                                                        <th>Tipo de reporte</th>
                                                        <th>Orientador</th>
                                                        <th>Fecha de creación</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($t->reportes as $r)
                                                        <tr>
                                                            <td>{{$r->id}}</td>
                                                            <td>{{$r->detalle->numero_control}}</td>
                                                            <td></td>
                                                            <td>ASDASD</td>
                                                            <td>ASDASD</td>
                                                        </tr>
                                                        @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                        </div>
                        @endforeach

@stop
