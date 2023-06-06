var mensaje = document.getElementById('mensaje');
var url = "http://localhost/SIGARE/public/";
var url_server = window.location.href;
console.log(url_server);

function copiar(){
    $( document ).ready(function(){
        const content = document.getElementById('copiar');
        navigator.clipboard.writeText(content.textContent);
        $('#copyImg').attr('src', url + "images/check.png");
        $('#tooltip').text('Copiado!');
        $('#copyImg').attr('width', '20px');
        $('#tooltip').attr('class', 'tooltip-box');
        setTimeout(function() {
            $('#copyImg').attr('src', url + "images/copyIcon.png");
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
    console.log(url_server);return;
    $( document ).ready(function() {
        var jqxhr = $.get(url + "revision/mensaje/" + mensaje.value, function(data) {
            console.log(data);
            if(data == 0){
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
                         var jqxhr = $.get(url + "asistente/expediente/"+mensaje.value, function(data) {
                             if(data == 0){
                                 document.getElementById('respuesta').innerText = "No hay un número de control válido";
                             } else {
                                 window.location.href= url + "consultar/expediente/" + data;
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

