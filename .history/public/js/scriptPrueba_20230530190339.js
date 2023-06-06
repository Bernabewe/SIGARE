var mensaje = document.getElementById('mensaje');
var url = "http://localhost/SIGARE/public/";
const boton = document.querySelector('botonCopiar')
const input = document.getElementById('numeroControlCopiar')

function procesarMensaje(){
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



boton.addEventListener('click', function(){
    input.focus()
    document.execCommand('selectAll')
});
