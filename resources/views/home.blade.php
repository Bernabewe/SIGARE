<?php

?>
@extends('app')

@section('contenido')
    <h5 class="mb-2">Información</h5>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
            <span class="info-box-icon" style="background-color: #e2d4d4;"><i class="fas fa-users" style="color: #2E2E2E;"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Alumnos</span>
                <span class="info-box-number">{{count($alumnos)}}</span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
            <span class="info-box-icon" style="background-color: #e2d4d4;"><i class="fas fa-copy" style="color: #2E2E2E;"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Reportes</span>
                <span class="info-box-number">{{count($reportes)}}</span>
            </div>
            <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
    </div>
    <br>
    <div style="width: 100%;">
        <div style="width: 55%; display: inline-block;">
            <h5 class="mb-2">Reportes de hoy</h5>
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
                                <th>Orientadora</th>
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div style="width: 30%; display: inline-block;">
            <h5 class="mb-2">Gráfica de pastel</h5>
            <canvas id="myChart" height="100px"></canvas>
        </div>
    </div>
    <!-- <img src="images/cetis107.jpg" alt="">
    <img src="images/siseems.jpg" alt=""> -->
    <div style="width: 50%; display: inline-block; text-align:center;">
        Página oficial del CETis107. <a href="https://cetis107.edu.mx/portal/">Página web</a>
    </div>
    <div style="width: 49%; display: inline-block; text-align:center;">
        Página oficial del SISEEMS. <a href="http://siseems.sems.gob.mx/produccion/">Página web</a>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">

    var labels =  {{ Js::from($labels) }};
    var users =  {{ Js::from($data) }};


    const data = {
        labels: labels,
        datasets: [{
            label: 'Reportes',
            backgroundColor: ['#F0D020', '#B7312C'],
            borderColor: '#ffffff',
            data: users,
        }]
    };

    const config = {
        type: 'doughnut',
        data: data,
        options: {}
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

</script>
@stop
