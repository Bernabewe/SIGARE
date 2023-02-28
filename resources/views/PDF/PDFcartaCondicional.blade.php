
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carta Condicional</title>
    <!-- <title>Reporte PDF Generico</title> -->
    <style>
        .text {
            font-size: 14px;
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
        .linea{
            width: 80%;
            border: 0.1px solid black;
        }
        .linea2{
            width: 40%;
            border: 0.1px solid black;
        }
    </style>
</head> 
<body>
    <img src="{{asset('images/encabezado.jpg')}}" alt="">
    <div style=" font-weight: bold;">
        <p style="font-weight: bold;text-align: center;"> CARTA CONDICIONAL</p>
    </div>

    <div style="text-align: right;">
        <p>Culiacán Sin., {{$fecha}} <br></p>
    </div>
    <div class="text">
        <p>Conscientes de la formación educativa que promueve el Plantel, y que mi hijo (a) <b>{{$alumno->nombre_completo}},
            </b> del grupo <b>"{{$alumno->grupo}}"</b> Turno <b>{{$alumno->turno}},</b> de la Especialidad: <b>{{$alumno->carrera}},</b> ha
            Infringido el Reglamento Escolar de los Planteles dependientes de la D.G.E.T.I., que en su artículo 1º dice:
            “Acatar y cumplir los reglamentos e instrucciones que establezca la Dirección General de Educación
            Tecnológica Industrial, así como las disposiciones que dicten las autoridades del plantel”, al igual que el
            Reglamento Interno del Plantel, al haber incurrido en:<b> {{$reporte->detalle->motivo}}, lo que señala cómo falta al Art.{{$reporte->detalle->articulo}}  del
            reglamento interno.</b></p>
    </div><br>
    <div class="text">
        <p>Manifestamos nuestro compromiso, de:</p>
        <ul>
            <li style="text-decoration: underline;">COMPROMISOS.</li>
            <li style="text-decoration: underline;">{{$reporte->detalle->compromisos}}.</li>
        </ul>
    </div><br>
    <div class="text">
        <p>Además de observar y cumplir estrictamente con los reglamentos de la DGETI y el Reglamento Interno
            del Plantel en su totalidad a fin de poder continuar y permanecer en este último.</p>

        <p>El presente documento es una oportunidad extraordinaria, por lo que de no cumplirse este compromiso,
            será canalizado el caso al Comité Revisor Consultivo.</p>
    </div>

    
    <div class="contenedor">
        <div class="celda">
            <hr class="linea">
            <p style="margin-bottom:70px;">Alumno:</p>
        </div>
        <div class="celda">
            <hr class="linea">
            <p style="margin-bottom:70px;">Padre de familia:</p>
        </div>

        <div class="celda">
            <hr class="linea">
            <p style="margin-bottom:50px;">Psic. Rosangel Camacho González <br>
                 Orientadora Educativa T. V.</p>
        </div>
        
        <div class="celda">
            <hr class="linea">
            <p style="margin-bottom:50px;">CP. Adriana Valdez Barreras <br>
                Jefa de Servicios Escolares T. V.</p>
        </div>
    </div>

    <div class="text" style="text-align: center;">
        <hr class="linea2">
        <p style="margin-bottom:50px;">M.C. Gabriel G. Vázquez Martínez <br>
            Director de CETis 107</p>
    </div>

    <div class="footer">
    <img src="{{asset('images/footer.jpg')}}" alt="">
    </div>
</body>
</html>