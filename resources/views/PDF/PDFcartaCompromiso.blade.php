<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carta compromiso</title>
    <style>
        .text {
            font-size: 16px;
            text-align: justify;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .contenedor{
            width: 100%;
            margin-top: 50px;
        }
        .celda{
            width: 48%;
            text-align: center;
            display: inline-block;
        }
    </style>
</head>
<body>
    <img src="{{asset('images/encabezado.jpg')}}" alt="">
    <div style="text-align: center;">
        <h2> Carta Compromiso </h2>
    </div>
    <div style="text-align: right;">
        <p>Culiacán, Sinaloa; a {{$fecha}}.</p> 
    </div>
    <div class="text">
        <p> 
            De acuerdo a la reunión llevada a cabo por la Dirección del Centro de Estudios Tecnológicos
            Industrial y de Servicios no. 107 para revisar la falta en la que incurrió el alumno: {{$alumno->nombre_completo}}
            del grupo {{$alumno->grupo}} que consiste en: {{$reporte->detalle->motivo}}, se presentó la madre de familia: {{$reporte->detalle->tutor}}, con la
            finalidad de llevar a cabo compromisos y acuerdos que sirvan de pauta para mejorar dicha situación.
        </p>
        <p>
            Por cada una de las partes interesadas se establecerán los siguientes compromisos y estrategias para
            que el alumno: {{$alumno->nombre_completo}} corrija y resuelva sus dificultades.
        </p>
    </div>
    <div class="text">
        <ul>
            <li>{{$reporte->detalle->compromisos}}</li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <div class="text">
        <p> 
            Las medidas que se llevarán a cabo son para beneficio del alumno, comprometiéndonos las autoridades
            presentes a llevar un monitoreo para verificar que se estén llevando a cabo las acciones propuestas.
        </p>
        <p>
            Esperamos contar con su compromiso y dedicación para cumplir el acuerdo aquí establecido. Se
            mantendrá informados a los padres de familia sobre los avances o retrocesos que se presenten.
        </p>
    </div>
    <div style="text-align: center; margin-top: 60px;">
        <p>{{$alumno->nombre_completo}}</p>
        <p>Alumno </p>
    </div>
    <div class="contenedor">
        <div class="celda">
            <p>{{$reporte->detalle->tutor}}</p>
            <p>Padre, madre o tutor</p>          
        </div>
        <div class="celda">
            <p>Psic. Rosangel Camacho González</p>
            <p>Orientación Educativa</p>
        </div>
    </div>
    <div style="text-align: center;">
        <p> CP. Adriana Valdez Barreras</p>
        <p> Jefa de Servicios de Escolares T. V.</p>
    </div>
    <div class="footer">
    <img src="{{asset('images/footer.jpg')}}" alt="">
    </div>
</body>
</html>