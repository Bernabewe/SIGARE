<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Canalización</title>
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
        <p>Fecha: ***FECHA***</p> 
    </div>
    <div class="text">
        <p>Nombre del Alumno(a): NOMBRE </p>
        <p>Grupo: GRUPO  Turno: VESPERTINO  Especialidad: ESPECIALIDAD</p>
        <p>Nombre del padre o tutor: PADRE O TUTOR</p>
        <p>Nombre de la institución: CETIS 107</p>
        <p>Domiciliio: DOMICILIO</p>
        <p>Teléfono: TELEFONO</p>
    </div>
    <div class="text">
        <p>Especifiqué el problema: MOTIVO</p>
        <p>Área donde se canaliza:</p>
        <p>Observaciones:</p>
    </div>
    <div style="text-align: center;">
        <p><b> ATENTAMENTE</p> 
    </div>
    <div style="text-align: center; margin-top: 60px;">
        <hr>
        <p> Lic. Evangelina Arrearán Tirado <br>
            Orientadora Educativa T. V.     </p>
    </div>
    <div style="margin-top: 50px;">
        <p>Firma de recibido:</p>
    </div>
    <div style="margin-top: 40px; text-align: center;">
        <hr>
        <p>Nombre y firma del tutor grupal</p>
    </div>

    <div class="footer">
    <img src="{{asset('images/footer.jpg')}}" alt="">
    </div>
</body>
</html>