<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Canalización de {{$alumno->numero_control}}</title>
    <style>
        .text {
            font-size: 18px;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .linea{
            width: 80%;
            border: 0.1px solid black;
        }
        hr{
            width: 40%;
            border: 0.1px solid black;
        }


    </style>
</head>
<body>
    <img src="{{asset('images/encabezado.jpg')}}" alt="">
    <div style="text-align: center;">
        <h2> Hoja de Canalización </h2>
    </div>
    <div style="text-align: right;">
        <p>Fecha: {{$fecha}}.
    </div>
    <div class="text">
        <p>Nombre del Alumno(a): <b>{{ucwords(mb_convert_case($alumno->nombre_completo, MB_CASE_LOWER, "UTF-8"))}}</b> </p>
        <p>Grupo: <b>{{$alumno->grupo}}</b>  Turno: <b>{{ucwords(mb_convert_case($alumno->turno, MB_CASE_LOWER, "UTF-8"))}}</b>  Especialidad: <b>{{ucwords(mb_convert_case($alumno->carrera, MB_CASE_LOWER, "UTF-8"))}}</b></p>
        <p>Nombre del padre o tutor: <b>{{$reporte->detalle->tutor}}</b></p>
        <p>Nombre de la institución: CETIS 107</p>
        <p>Domiciliio: <b>{{$reporte->detalle->domicilio}}</b></p>
        <p>Teléfono: 1234567890</p>
    </div>
    <div class="text">
        <p>Especifiqué el problema: <b>{{$reporte->detalle->motivo}}</b></p>
        <p>Área donde se canaliza: <b>{{$reporte->detalle->area_canalizacion}}</b>}</p>
        <p>Observaciones: <b>{{$reporte->detalle->observaciones}}</b></p>
    </div>
    <div style="text-align: center;">
        <p><b> ATENTAMENTE</p>
    </div>
    <div style="text-align: center; margin-top: 60px;">
        <hr>
        <p> Lic. Evangelina Arrearán Tirado <br>
            Orientadora Educativa T. V.     </p>
    </div>
    <div style="margin-top: 50px;text-align: center;">
        <p>Firma de recibido:</p>
    </div>
    <div style="margin-top: 40px;text-align: center;">
        <hr style="text-align: center;">
        <p>Nombre y firma del tutor grupal</p>
    </div>

    <div class="footer">
    <img src="{{asset('images/footer.JPG')}}" alt="">
    </div>
</body>
</html>
