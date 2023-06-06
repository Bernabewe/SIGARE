var mensaje = document.getElementById('mensaje');
var url = "http://localhost/SIGARE/public/";
var url_server = "";
console.log(url_server);

function copiar(){
    $( document ).ready(function(){
        navigator.clipboard.writeText($("#copiar").text());

        $('#copyImg').attr('src', url_server + "../images/check.png");
        $('#tooltip').text('Copiado!');
        $('#copyImg').attr('width', '20px');
        $('#tooltip').attr('class', 'tooltip-box');
        setTimeout(function() {
            $('#copyImg').attr('src', url_server + "../images/copyIcon.png");
            $('#tooltip').text('Copiar');
            $('#tooltip').attr('class', 'tooltip-box-none');
        }, 2000);
    });
}
function mouseover(){
    $( document ).ready(function(){
        $('#tooltip').attr('class', 'tooltip-box');
    });
}

function mouseout(){
    $( document ).ready(function(){
        $('#tooltip').attr('class', 'tooltip-box-none');
    });
}

function procesarMensaje(){
    $( document ).ready(function() {
        var jqxhr = $.get(url_server + "revision/mensaje/" + mensaje.value, function(data) {
            console.log(data);
            if(data == 0){
                if(mensaje.value.search("reporte individual") >= 0){
                    window.location.href= url_server + "reporte/individual";
                 }
                 else if(mensaje.value.search("reporte grupal") >= 0){
                     window.location.href= url_server + "reporte/grupal";
                 }
                 else if(mensaje.value.search("baja") >= 0){
                     window.location.href= url_server + "reporte/baja";
                 }
                 else if(mensaje.value.search("justificante") >= 0){
                     window.location.href= url_server + "reporte/justificante";
                 }
                 else if(mensaje.value.search("carta compromiso") >= 0){
                     window.location.href= url_server + "reporte/cartaCompromiso";
                 }
                 else if(mensaje.value.search("canalización") >= 0){
                     window.location.href= url_server + "reporte/canalizacion";
                 }
                 else if(mensaje.value.search("carta buena conducta") >= 0){
                     window.location.href= url_server + "reporte/cartaBuenaConducta";
                 }
                 else if(mensaje.value.search("carta condicional") >= 0){
                     window.location.href= url_server + "reporte/cartaCondicional";
                 }
                 else if(mensaje.value.search("expediente") >= 0){

                     $( document ).ready(function() {
                         var jqxhr = $.get(url_server + "asistente/expediente/"+mensaje.value, function(data) {
                             if(data == 0){
                                 document.getElementById('respuesta').innerText = "No hay un número de control válido para seleccionar el expediente";
                             } else {
                                 window.location.href= url_server + "consultar/expediente/" + data;
                             }
                           })
                             .fail(function() {
                                 Swal.fire({
                                     icon: 'error',
                                     title: 'Oops...',
                                     text: 'Ocurrio un error!',
                                   })
                             })
                     });
                 }
                 else{
                     document.getElementById('respuesta').innerText = "¡Hola!¿En qué te puedo ayudar?";
                 }
            } else {
                Swal.fire({
                    icon: 'info',
                    text: 'Por favor, utilice un lenguaje apropiado',
                  })
            }
        });
    });

};

