@extends('app')

@section('titulo')
    <h1>Expediente de -----</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Expediente de -----</li>
@stop

@section('contenido')
<div class="container m-0">
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    sdf
                </div>
                <div class="card-body">
                    sdfs
                </div>
            </div>
        </div>
    </div>
</div>
@stop
