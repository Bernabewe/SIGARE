var mensaje = document.getElementById('mensaje');
<<<<<<< HEAD
var form = document.getElementById('form');
var url = "http://localhost/SIGARE/public/reporte/";


function procesarMensaje(){
    form.removeAttribute("onsubmit");
    if(mensaje.value.search("reporte individual") >= 0){
        form.setAttribute("action", url + "individual");
    }else if(mensaje.search("reporte grupal") >= 0){
        form.setAttribute("action", url + "grupal");
    }else if(mensaje.search("baja") >= 0){
        form.setAttribute("action", url + "baja");
    }else if(mensaje.search("justificante") >= 0){
        form.setAttribute("action", url + "justificante");
    }else if(mensaje.search("carta compromiso") >= 0){
        form.setAttribute("action", url + "cartaCompromiso");
    }else if(mensaje.search("buena conducta") >= 0){
        form.setAttribute("action", url + "cartaBuenaConducta");
    }else if(mensaje.search("carta condiconal") >= 0){
        form.setAttribute("action", url + "cartaCondicional");
    }else if(mensaje.search("canalizacion") >= 0){
        form.setAttribute("action", url + "canalizacion");
    }else{
        form.setAttribute("onsubmit", "return false");
=======
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
        var mensajeSplit = mensaje.value.split(" ");
        if(mensajeSplit.length == 2){
            window.location.href= url + "expedienteAlumnos/" + mensajeSplit[1];
        }
    }
    else{
>>>>>>> 9477ff3908cf9ca6c19fb52b0a40c5d995e52f3f
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
<<<<<<< HEAD
=======
var palabra = "Hola";
>>>>>>> 9477ff3908cf9ca6c19fb52b0a40c5d995e52f3f
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
