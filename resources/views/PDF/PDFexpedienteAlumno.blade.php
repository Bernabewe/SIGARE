<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expediente de {{ucwords(mb_convert_case($alumno->nombre_completo, MB_CASE_LOWER, "UTF-8"))}}</title>
    <style>
        .text {
            font-size: 20px;
            text-align: justify;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .table{
            border: 1px solid black;
            width: 80%;
            margin-left: 10%;
            border-collapse: collapse;
        }
        .table tr td {border: 1px solid black; height: 30px;text-align: center;}
        .table tr th {border: 1px solid black; height: 30px;text-align: center;}


    </style>
</head>
<body>
    <img src="{{asset('images/encabezado.jpg')}}" alt="">
    <div style="text-align: right;">
        <p>Culiacán Sin., {{$fecha}} <br></p>
    </div>
    <div style="text-align: center;font-size: 20px;">
        <h2>Expediente de {{ucwords(mb_convert_case($alumno->nombre_completo, MB_CASE_LOWER, "UTF-8"))}}</h2>
        <br>
    </div>
    <div class="text">
        <p>Número de control: <b>{{ $alumno->numero_control }}</b><br>
        Curp: <b>{{$alumno->curp}}</b><br>
        Especialidad: <b>{{ucwords(mb_convert_case($alumno->carrera, MB_CASE_LOWER, "UTF-8"))}}</b><br>
        Grupo: <b>{{ $alumno->grupo }}</b><br>
        Generación: <b>{{ $alumno->generacion }}</b><br>
        Turno: <b>{{ucwords(mb_convert_case($alumno->turno, MB_CASE_LOWER, "UTF-8"))}}</b>
        </p>
    </div>
    <div>
        <br>
        <h3 style="text-align: center;">Tabla de reportes:</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Tipo de reporte</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipos as $t)
                    <tr>
                        <td class="center">{{ $t->nombre }}</td>
                        <td class="center">{{count($t->reportes)}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="footer">
    <img src="{{asset('images/footer.JPG')}}" alt="">
    </div>
</body>
</html>

