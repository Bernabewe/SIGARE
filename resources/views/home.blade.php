@extends('app')

@section('contenido')
<div class="card card-outline card-primary">
<div class="card-header">
<h3 class="card-title">Primary Outline</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse">
<i class="fas fa-minus"></i>
</button>
</div>

</div>

<div class="card-body">
The body of the card
</div>

</div>
<div class="container m-0">
    <h4 class="mb-2">Información</h4>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon" style="background-color: #e2d4d4;"><i class="fas fa-users" style="color: #2E2E2E;"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Alumnos</span>
                    <span class="info-box-number">{{count($alumnos)}}</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon" style="background-color: #e2d4d4;"><i class="fas fa-copy" style="color: #2E2E2E;"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Reportes</span>
                    <span class="info-box-number">{{count($reportes)}}</span>
                </div>
            </div>
        </div>
    </div> <br>

    <div class="row">
        <div class="col-sm-12">
            <h4 class="mb-2 text-center">Reportes de hoy</h4>
            <div class="responsive-table">
                <table class="table table-striped" style="text-align: center;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Num. de cotrol</th>
                            <th>Nombre</th>
                            <th>Especialidad</th>
                            <th>Tipo de reporte</th>
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-sm-12 text-center">
            <h4 class="mb-2">Total de reportes</h4>
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
    var estadistica =  {{ Js::from($data) }};


    const data = {
        labels: labels,
        datasets: [{
            label: 'Reportes',
            backgroundColor: ['#F0D020', '#B7312C', '#DDC9A3', '#9F2241', '#98989A', '#BC955C', '#6F7271'],
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