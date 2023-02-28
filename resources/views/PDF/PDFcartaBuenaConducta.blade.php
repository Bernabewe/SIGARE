<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carta buena conducta</title>
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
        hr{
            width: 40%;
            border: 0.1px solid black;
        }        
    </style>
</head> 
<body>
    <img src="{{asset('images/encabezado.jpg')}}" alt="">
    <div style="text-align: right;">
        <p><b> DEPTO. DE SERVICIOS ESCOLARES <br>
            OFICINA: ORIENTACIÓN EDUCATIVA <br>
            ASUNTO: CARTA DE BUENA CONDUCTA <br>
        </p>
    </div>
    <div>
        <p><b>A QUIEN CORRESPONDA:</p>
        <br>
    </div>
    <div class="text">
        <p> 
            El que suscribe Director de este Centro de Estudios, perteneciente al Sistema Educativo
            Nacional, por medio de la presente hace CONSTAR: Que el (la) alumno(a), cuyos datos se
            anotan a continuación:
        </p>
    </div>
    <div class="text">
        <p> Nombre del Alumno(a): {{$alumno->nombre_completo}} </p>
        <p> No. de control: {{$alumno->numero_control}} </p>
        <p> Especialidad: {{$alumno->carrera}} </p>
        <p> Generación: {{$alumno->generacion}} </p>
    </div>
    <div class="text">
        <p> 
        Observó BUENA CONDUCTA durante el desarrollo de sus actividades académicas. A petición
        del interesado se extiende la presente en la ciudad de Culiacán, Sinaloa a los X días del mes
        de X del año X.
        </p>
    </div>
    <div style="text-align: center; margin-top: 50px;">
        <p><b> ATENTAMENTE</p> 
    </div>
    <div style="text-align: center; margin-top: 60px;">
        <hr>
        <p> Gabriel G. Vázquez Martínez <br>
            Director de CETis 107</p>
    </div>

    <div class="footer">
    <img src="{{asset('images/footer.jpg')}}" alt="">
    </div>
</body>
</html>