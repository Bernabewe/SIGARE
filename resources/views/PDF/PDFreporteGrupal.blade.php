<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte Grupal</title>
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
            width: 65%;
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
        <h2><b>REPORTE GRUPAL</b></h2>
        <br>
    </div>
    <div class="text-align: left; text">
        <p>Grupo: <br>
            Especialidad:   Turno:  <br>
            Motivo: <br><br>
            En caso de reincidir en faltas al reglamento, los alumnos se harán acreedores a otro
            tipo de sanción. <br></p>
    </div>

    <div class="contenedor">
        <div class="celda">
            <p style="margin-bottom:70px;">Nombre y firma de quien reporta</p>
            <hr class="linea">
        </div>
        <div class="celda">
            <p style="margin-bottom:70px;">Firma del jefe de grupo</p>
            <hr class="linea">
        </div>
    </div>
    <div class="contenedor">
        <div class="text" style="text-align: center;">
            <p><hr class="linea2"> <br>
            PSIC. ROSANGEL CAMACHO G. <br>
            ORIENTACION EDUCATIVA 6TO. SEMESTRE</p>
        </div>
    </div>
    <div class="footer">
    <img src="{{asset('images/footer.jpg')}}" alt="">
    </div>
</body>
</html>