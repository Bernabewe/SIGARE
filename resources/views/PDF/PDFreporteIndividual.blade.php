<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Justificante</title>
    <!-- <title>Reporte PDF Generico</title> -->
    <style>
        .text {
            font-size: 18px;
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
    <div style="text-align: right;">
        <p>Culiacán Sin. ***Fecha*** <br>
        OFICIO: ***Fecha oficio***</p>
    </div>
    <div style="text-align: center;">
        <h2>Reporte Indivual</h2>
        <br>
    </div>
    <div class="text">
        <p>Nombre del Alumno(a): NOMBRE Grupo: GRUPO. <br>
        Especialidad: ESPECIALIDAD Turno: VESPERTINO Motivo MOTIVO
        </p>
    </div>
    <div class="text">
        <p>En caso de reincidir en faltas al reglamento, el alumno se hará acreedor a otro tipo
        de sanción.
        </p>
    </div>
    <div class="contenedor">
        <div class="celda">
            <p style="margin-bottom:70px;">Nombre y firma de quien reporta</p>
            <hr class="linea">
        </div>
        <div class="celda">
            <p style="margin-bottom:70px;">Firma del alumno</p>
            <hr class="linea">
        </div>
    </div>
    <div class="contenedor" style="text-align: center;">
        <hr class="linea2">
        <p>PSIC. ROSANGEL CAMACHO G. <br>
        ORIENTACION EDUCATIVA 1ER. SEMESTRE</p>
    </div>

    <div class="footer">
    <img src="{{asset('images/footer.jpg')}}" alt="">
    </div>
</body>
</html>