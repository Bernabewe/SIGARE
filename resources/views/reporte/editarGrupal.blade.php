@extends('app')

@section('titulo')
    <h1>Reporte grupal</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Reporte grupal</li>
@stop

@section('contenido')
    <form action="{{url('/reporte/grupal/actualizar')}}/{{$reporte->id}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Seleccione el grupo a reportar</label>
            <div>
                <select class="form-control" name="grupo" id="" disabled>
                    <option value="">{{ $reporte->grupo }}</option>
                </select>
            </div>
            <div class="mt-3">
                <select class="form-control" name="turno" id="" disabled>
                    <option value="">{{ucwords(mb_convert_case($reporte->turno, MB_CASE_LOWER, "UTF-8"))}}</option>
                </select>
            </div>
            <div class="mt-3">
                <select class="form-control" name="especialidad" id="" disabled>
                    <option value="">{{ucwords(mb_convert_case($reporte->especialidad, MB_CASE_LOWER, "UTF-8"))}}</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="">Motivo</label>
            <input value="{{$reporte->detalle->motivo}}" name="motivo" type="textarea" class="form-control" required>
        </div>
        <div style="text-align:right;">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ asset('/home') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop
