@extends('app')

@section('titulo')
    <h1>Expediente de -----</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Expediente de -----</li>
@stop

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card card-outline card-danger" style="border-top: 3px solid #722C2C;">
                <div class="card-header">
                    <h3 class="card-title">{{ucwords(mb_convert_case($alumno->nombre, MB_CASE_LOWER, "UTF-8"))}}</h3>
                </div>

            </div>
        </div>
    </div>
</div>
@stop
