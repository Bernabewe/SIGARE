
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baja</title>
    <!-- <title>Reporte PDF Generico</title> -->
    <style>
        .text {
            font-size: 18px;
            text-align: justify;
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .contenedor{
            width: 100%;
            margin-top: 100px;
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
    <div style="text-align: left; font-weight: bold;">
        <p>DEPTO: SERVICIOS ESCOLARES <br>
            OFICINA: CONTROL ESCOLAR <br> 
            ASUNTO: BAJA DEFINITIVA</p>
    </div>
    <div style=" font-weight: bold;">
        <p>C. MADRE DE FAMILIA
        <br>
    </div>

    <div class="text">
        <p> 
            Por este conducto informó que el alumno: <b>{{$alumno->nombre_completo}},</b> con No. De Control <b>{{$alumno->numero_control}}</b> 
            del semestre <b>{{$alumno->grupo}}</b> Del turno 
            <b>{{$alumno->turno}},</b> de la especialidad  de <b>{{$alumno->carrera}},
            </b> se le de la <b>BAJA DEFINITIVA</b> en esta institución. 
        </p>
    </div>
    <div class="text">
        <p>Motivo: <b>{{$reporte->detalle->motivo}}.</b></p>
    </div>
    <div class="text">
        Sin otro asunto en particulas, y esperando que usted haya tomado
        las medidas pertinentes le reitero mis atenciones.
    </div><br>
    <div class="text" style="text-align: center;">
        <p>Culiacán, Sinaloa, a 20 de octubre del 2022.<p>
    </div>
        <div class="text" style="text-align: center; font-weight: bold;">
            <p>ATENTAMENTE</p><br>

            <p>Lic. Rosangel Camacho Gonzáles <br>
            Orientadora Educativa T. V.</p>
        </div>
    <div class="contenedor">
        <div class="celda">
            <p style="margin-bottom:25px; font-weight: bold;">Lic. Mara Hernández Valle <br> Camacho Castro <br>
                Jefe de Servicios Escolares T. M.</p>
        </div>
        <div class="celda">
            <p style="margin-bottom:25px; font-weight: bold;">Lic. Angélica <br>  Jefa de Oficina de control escolar<br></p>
        </div>
    </div>
    <div class="text">
        <p style="text-align: center; font-weight: bold;"> NOMBRE DEL PADRE DE FAMILIA</p>
    </div>

    

    <div class="footer">
    <img src="{{asset('images/footer.jpg')}}" alt="">
    </div>
</body>
</html>