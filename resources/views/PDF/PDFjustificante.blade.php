
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte Individual</title>
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
        .table{
            border: 1px solid black;
            width: 80%;
            margin-left: 10%;
            border-collapse: collapse;
        }
        .table tr td {border: 1px solid black; height: 30px;}
        .table tr th {border: 1px solid black; height: 30px;}

    </style>
</head> 
<body>
    <img src="{{asset('images/encabezado.jpg')}}" alt="">
    <div style="text-align: right;">
        <p>Culiacán Sin. ***Fecha*** <br>
        OFICIO: ***Fecha oficio***</p>
    </div>
    <div style="text-align: center;">
        <h2>Justificante de inasistencias</h2>
        <br>
    </div>
    <div class="text">
        <p> 
            C.C. PROFESORES DEL GRUPO: 5B <br>
            ESPECIALIDAD: CONSTRUCCIÓN <br>
            TURNO: MATUTINO <br>
            P R E S E N T E.
        </p>
    </div>
    <div class="text">
        <p> 
            Por este conducto, solicito le sea(n) justificada(s) las inasistencias al alumno (a):
            NOMBRE DEL ALUMNO quien por motivos DE PARTICIÁCIÓN EN EL ENAC, no acudió a
            clases el(los) día(s): 15 DE NOVIEMBRE del presente año.
            Cabe señalar que es RESPONSABILIDAD del ALUMNO(A) regularizarse en la entrega de trabajos
            y/o tareas que el (la) profesor(a) haya encomendado, haciendo mención que el presente documento
            NO EXENTA al alumno de sus obligaciones académicas.
        </p>
    </div>
    <div class="text" style="text-align: center; margin-top: 40px;">
        <p> 
            <b> ATENTAMENTE
        </p>
        <p> 
            <b> LIC. MARA HERNÁNDEZ VALLE <br>
                JEFA DE SERVICIOS ESCOLARES
        </p>
    </div>
    
    <div>
        <table class="table">
            <thead>
                <tr>
                    <th>Asignatura</th>
                    <th>Nombre del profesor</th>
                    <th>Firma</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="footer">
    <img src="{{asset('images/footer.jpg')}}" alt="">
    </div>
</body>
</html>