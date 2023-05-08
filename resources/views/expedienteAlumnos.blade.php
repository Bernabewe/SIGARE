@extends('app')

@section('titulo')
    <h1>Expediente de -----</h1>
@stop

@section('breadcrum')
    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Inicio</a></li>
    <li class="breadcrumb-item active">Expediente de -------</li>
@stop

@section('contenido')
    <form action="" method="POST">
        @csrf
            @foreach ($tipos as $r)
            @if ($r->id == '3')
            <div class="card card-outline card-dark collapsed-card" style="border-top: 3px solid #722C2C">
                <div class="card-header">
                    <h3 class="card-title">Justificantes:</h3>
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
                                        <tr>
                                            <td>{{$r }}</td>
                                            <td>asdasDSA</td>
                                            <td>{{$r}}</td>
                                            <td>ASDASD</td>
                                            <td>ASDASD</td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endif
                @if ($r->id == '8')
                <div class="card card-outline card-dark collapsed-card" style="border-top: 3px solid #722C2C">
                    <div class="card-header">
                        <h3 class="card-title">Reportes Individuales:</h3>
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
                                            <tr>
                                                <td>{{$r->detalle}}</td>
                                                <td></td>
                                                <td>ASDASDS</td>
                                                <td>ASDASD</td>
                                                <td>ASDASD</td>
                                            </tr>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if ($r->id == '5')
                <div class="card card-outline card-dark collapsed-card" style="border-top: 3px solid #722C2C">
                    <div class="card-header">
                        <h3 class="card-title">Cartas Condicionales:</h3>
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
                                            <tr>
                                                <td></td>
                                                <td>asdasDSA</td>
                                                <td>ASDASDS</td>
                                                <td>ASDASD</td>
                                                <td>ASDASD</td>
                                            </tr>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @if ($r->id == '6')
                <div class="card card-outline card-dark collapsed-card" style="border-top: 3px solid #722C2C">
                    <div class="card-header">
                        <h3 class="card-title">Cartas Compromiso:</h3>
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
                                            <tr>
                                                <td></td>
                                                <td>asdasDSA</td>
                                                <td>ASDASDS</td>
                                                <td>ASDASD</td>
                                                <td>ASDASD</td>
                                            </tr>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
    </form>


@stop
