@extends('app')

@section('titulo')
    <h1>Reporte grupal</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Reporte grupal</li>
@stop

@section('contenido')
    <form action="{{url('/reporte/grupal/guardar')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Seleccione el grupo a reportar</label>
            <div>
                <select class="form-control" name="grupo" id="" required>
                    <option value="">Seleccione un grupo</option>
                    @foreach ($grupos as $g)
                        <option value="{{ $g->grupo }}">{{ $g->grupo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <select class="form-control" name="turno" id="" required>
                    <option value="">Seleccione un turno</option>
                    @foreach ($turnos as $t)
                        <option value="{{ $t->turno }}">{{ucwords(mb_convert_case($t->turno, MB_CASE_LOWER, "UTF-8"))}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-3">
                <select class="form-control" name="especialidad" id="" required>
                    <option value="">Seleccione una especialidad</option>
                    @foreach ($especialidades as $e)
                        <option value="{{ $e->carrera }}">{{ucwords(mb_convert_case($e->carrera, MB_CASE_LOWER, "UTF-8"))}}</option>
                    @endforeach
                        <option value="sin_especialidad"> Sin especialidad </option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="">Motivo</label>
            <input name="motivo" type="textarea" class="form-control" required>
        </div>
        <div style="text-align:right;">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ asset('/home') }}" class="btn btn-danger">Cancelar</a>
        </div>
    </form>
@stop
