/**
 * Created by root on 11/2/13.
 */

$(document).ready(function() {
    $("#enviar").on('click',function(){
        var texto=$("#comentarios").val();
        var fecha= new Date();
        var fechaComentario= "<span class='fecha'>"+fecha.getHours()+":"+fecha.getMinutes()+":"+fecha.getSeconds()+"</span>";
        var divComentarioEscrito= "<div class='comentario-enviado'>";
        var divCompleto= divComentarioEscrito+fechaComentario+"   "+texto+"</div>";
            $("#comentarios-escritos").prepend(divCompleto);
    });
});