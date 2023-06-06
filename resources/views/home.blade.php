<?php

?>
@extends('app')

@section('contenido')
<div class="container m-0">
    <h4 class="mb-2">Información</h4>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon" style="background-color: #e2d4d4;"><i class="fas fa-users" style="color: #2E2E2E;"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total de alumnos</span>
                    <span class="info-box-number">{{count($alumnos)}}</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon" style="background-color: #e2d4d4;"><i class="fas fa-copy" style="color: #2E2E2E;"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total de reportes</span>
                    <span class="info-box-number">{{count($reportes)}}</span>
                </div>
            </div>
        </div>
    </div><br><hr style="border-color: black;">
    
    <script>
        window.addEventListener("keydown", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault();
                document.getElementById("button-addon2").click();
            }
        }); 
    </script>
    <label id="respuesta"></label><br>
    <div class="input-group mb-3">
        <input type="text" class="form-control" id="mensaje" placeholder="¡Hola!¿En qué puedo ayudarte?" aria-label="¡Hola!¿En qué puedo ayudarte?" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button onclick="procesarMensaje()" class="btn btn-outline-secondary" type="button" id="button-addon2">Enviar</button>
        </div>
    </div>
    <hr style="border-color: black;"><br>

    <div class="card card-outline card-dark collapsed-card" style="border-top: 3px solid #b2b2b2">
        <div class="card-header">
            <h3 class="card-title">Reportes de hoy</h3>
            <div class="card-tools">
            <span class="badge" style="text-align: right; font-size: 18px;">{{count($reportesHoy)}}</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color:gray;">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="display: none;">
            <div class="row">
                <div class="col-sm-12">
                    <div class="responsive-table">
                            @php
                                use App\Models\Reporte;
                                if(Auth::user()->hasRole('orientador')){
                                    $reportes= Reporte::where('user_id', '=', Auth::user()->id)
                                                    ->with(['detalle', 'tipo'])
                                                    ->get();
                                }else{

                                }
                            @endphp
                            <table class="table table-striped" style="text-align: center;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Num. de cotrol</th>
                                        <th>Nombre</th>
                                        <th>Especialidad</th>
                                        <th>Tipo de reporte</th>
                                        <th>Orientador</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($reportesHoy as $r)
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
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if(count($reportesHoy) < 1)
                        <p style="text-align: center; font-size: 18px"><i> No hay reportes para mostrar </i></p>   
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="card card-outline card-warning collapsed-card" style="border-top: 3px solid #b2b2b2">
        <div class="card-header">
            <h3 class="card-title">Total de reportes</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" style="color:gray;">
                    <i class="fas fa-plus"></i>
                </button>
            </div>
        </div>
        <div class="card-body" style="display: none;">
            <div class="col-sm-12 text-center">
                <canvas id="myChart" height="100px"></canvas>
            </div>
        </div>
    </div>

<!-- <img src="images/cetis107.jpg" alt="">
<img src="images/siseems.jpg" alt=""> -->
<div style="width: 50%; display: inline-block; text-align:center; font-weight: bold; font-size: 15px;">
    Página oficial de DGETI. <a href="http://www.dgeti.sep.gob.mx/" style="color: #722C2C;" target="_blank">Visitar página web</a>
</div>
<div style="width: 49%; display: inline-block; text-align:center; font-weight: bold; font-size: 15px;">
    Página oficial del SISEEMS. <a href="http://siseems.sems.gob.mx/produccion/" style="color: #722C2C;" target="_blank">Visitar página web</a>
</div>
@endsection

@section('scripts')
<script type="text/javascript">

    var labels =  {{ Js::from($labels) }};
    var estadistica =  {{ Js::from($data) }};


    const data = {
        labels: labels,
        datasets: [{
            label: 'Reportes',
            backgroundColor: ['#F0D020', '#B7312C', '#98989A', '#9F2241', '#DDC9A3', '#BC955C', '#6F7271'],
            borderColor: '#ffffff',
            data: estadistica,
        }]
    };

    const config = {
        type: 'pie',
        data: data,
        options: {
        responsive: true,
        legend: {
        position: 'top',
        }
        }
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

</script>
@stop
