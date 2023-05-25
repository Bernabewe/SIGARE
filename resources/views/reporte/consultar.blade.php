@extends('app')

@section('titulo')
    <h1>Consultar Reportes</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Consultar Reportes</li>
@stop

@section('contenido')
    <form action="{{url('/reporte/buscar')}}" method="POST">
        @csrf
        <div class="card card-outline card-warning collapsed-card" style="height:80%; border-top: 3px solid #b2b2b2;">
            <div class="card-header">
                <h3 class="card-title">Búsqueda avanzada</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color:gray;">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body" style="display: none;">
                <div>
                    <input class="form-control" value="{{request()->get('nombre','')}}" type="text" name="nombre" placeholder="Nombre del alumno">
                </div><br>
                <div>
                    <select class="form-control" name="tipo" id="">
                        <option value="">Tipo de reporte</option>
                        @foreach ($tipos as $t)
                            <option value="{{ $t->nombre }}">{{ucwords(mb_convert_case($t->nombre, MB_CASE_LOWER, "UTF-8"))}}</option>
                        @endforeach
                    </select>
                </div><br>
                <div>
                    <select class="form-control" name="especialidad" id="">
                        <option value="">Especialidad</option>
                        @foreach ($especialidades as $e)
                            <option value="{{ $e->carrera }}">{{ucwords(mb_convert_case($e->carrera, MB_CASE_LOWER, "UTF-8"))}}</option>
                        @endforeach
                    </select>
                </div><br>
                <input type="submit" value="Buscar" class="btn btn-secondary" style="margin-bottom: 4px;">
            </div>
        </div>
    </form>
    @if($x != null)
    <div style="text-align: right; margin-bottom: 10px;">
        <a href="{{asset('/reporte/consultar')}}" class="btn btn-danger">Cancelar búsqueda avanzada</a>
    </div>
    @endif
    <div class="responsive-table">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Num. de control</th>
                    <th>Nombre</th>
                    <th>Especialidad</th>
                    <th>Tipo de reporte</th>
                    <th>Orientador</th>
                    <th>Fecha de creación</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reportes as $r)
                <tr>
                    <td>{{$r->id}}</td>
                    <td>
                        @if ($r->detalle->alumno == NULL)
                            -
                        @else
                            {{$r->detalle->numero_control}}
                        @endif
                    </td>
                    <td>
                        @if ($r->detalle->alumno == NULL)
                            -
                        @else
                            {{ucwords(mb_convert_case($r->detalle->alumno->nombre, MB_CASE_LOWER, "UTF-8"))}}
                        @endif
                    </td>
                    <td>{{ucwords(mb_convert_case($r->especialidad, MB_CASE_LOWER, "UTF-8"))}}</td>
                    <td>{{ucwords(mb_convert_case($r->tipo->nombre, MB_CASE_LOWER, "UTF-8"))}}</td>
                    <td>{{$r->usuario->name}}</td>
                    <td>{{$r->created_at}}</td>
                    <td>
                        <a href="{{ url('reporte/pdf') }}/{{$r->id}}" class="btn btn-success btn-sm">
                            <i class="far fa-file-pdf"></i>
                        </a>
                        <a href="{{url('reporte/editar')}}/{{$r->id}}" class="btn btn-primary btn-sm">
                            <i class="far fa-edit"></i>
                        </a>
                        @if(Auth::user()->hasRole('administrador'))

                        <a href="{{url('reporte/eliminar')}}/{{$r->id}}" class="btn btn-danger btn-sm">
                                <i class="fas fa-times"></i>
                            </a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$reportes->links()}}
    </div>
@stop
