var mensaje = document.getElementById('mensaje');
var url = "http://localhost/SIGARE/public/";

function procesarMensaje(){
    if(mensaje.value.search("reporte individual") >= 0){
       window.location.href= url + "reporte/individual";
    }
    else if(mensaje.value.search("reporte grupal") >= 0){
        window.location.href= url + "reporte/grupal";
    }
    else if(mensaje.value.search("baja") >= 0){
        window.location.href= url + "reporte/baja";
    }
    else if(mensaje.value.search("justificante") >= 0){
        window.location.href= url + "reporte/justificante";
    }
    else if(mensaje.value.search("carta compromiso") >= 0){
        window.location.href= url + "reporte/cartaCompromiso";
    }
    else if(mensaje.value.search("canalización") >= 0){
        window.location.href= url + "reporte/canalizacion";
    }
    else if(mensaje.value.search("carta buena conducta") >= 0){
        window.location.href= url + "reporte/cartaBuenaConducta";
    }
    else if(mensaje.value.search("carta condicional") >= 0){
        window.location.href= url + "reporte/cartaCondicional";
    }
    else if(mensaje.value.search("expediente") >= 0){

        $( document ).ready(function() {
            var jqxhr = $.get( "http://localhost/SIGARE/public/asistente/expediente/"+mensaje.value, function(data) {
                console.log(data)
              })
                .fail(function() {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Ocurrio un error!',
                        footer: '<a href="">Why do I have this issue?</a>'
                      })
                })
        });

          return;
        var mensajeSplit = mensaje.value.split(" ");
        if(mensajeSplit.length == 2){
            window.location.href= url + "expedienteAlumnos/" + mensajeSplit[1];
        }
    }
    else{
        document.getElementById('respuesta').innerText = "¡Hola!¿En qué te puedo ayudar?";
    }
};

var genera = [
    "Produce",
    "Crea",
    "Provoca",
    "Ocasiona",
    "Engendra",
    "Origina",
    "Da lugar a",
    "Produce como resultado",
    "Desencadena",
    "Causa"
];
var hola = [
    "Hola",
    "Hey",
    "Saludos",
    "Buen día",
    "Buenas",
    "Hola qué tal",
    "Hola amigo",
    "Hola amiga",
    "Hola cómo estás",
    "Hola qué hay"
];
var alumno = [
    "Estudiante",
    "Aprendiz",
    "Discípulo",
    "Educando",
    "Pupilo",
    "Aspirante",
    "Escolar",
    "Novato",
    "Ingresante",
    "Aprendiente"
];

var motivo = [
    "Razón",
    "Causa",
    "Fundamento",
    "Pretexto",
    "Excusa",
    "Justificación",
    "Estímulo",
    "Incentivo",
    "Argumento",
    "Finalidad"
];
