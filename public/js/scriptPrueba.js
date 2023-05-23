var mensaje = document.getElementById('mensaje');
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
