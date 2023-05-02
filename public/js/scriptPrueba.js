var mensaje = document.getElementById('mensaje');
var palabra = "Hola";
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

function procesarMensaje(){
    saludar();
    /* if(mensaje.value.search("reporte individual") >= 0){
        document.getElementById('form').removeAttribute("onsubmit");
        document.getElementById('form').setAttribute("action", "{{url('/peticion')}}");
    }else{
        document.getElementById('respuesta').innerText = "¡Hola!¿En qué te puedo ayudar?";
    } */
};
function saludar(element, index, array){
    hola.forEach();
    var buscar = mensaje.value.search(element);
    alert(buscar)
    /* if(buscar >= 0){
        document.getElementById('respuesta').innerText = "¡Hola!¿En qué te puedo ayudar?";
    } */
}

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
