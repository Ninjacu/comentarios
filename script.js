/**
 * Created by root on 11/2/13.
 */

$(document).ready(function() {
    $("#enviar").on('click',function(){
        var texto=$("#comentarios").val();
        var fecha= new Date();
        var cruz= "<img class='eliminar' src='error.png'>"+"</img>";
        var fechaComentario= "<span class='fecha'>"+fecha.getHours()+":"+fecha.getMinutes()+":"+fecha.getSeconds()+"</span>";
        var divComentarioEscrito= "<div class='comentario-enviado'>";
        var divCompleto= divComentarioEscrito+fechaComentario+"   "+texto+"   "+cruz+"</div>";
            $("#comentarios-escritos").prepend(divCompleto);
        $.post("insertarcomentario.php",{texto:texto},function(){});
    });
    $("#comentarios-escritos").on('click', '.eliminar', function(){
       alert("Muere Padre!");
        var padre= $(this).parent();
        var hermanos= $(this).siblings(".porfin").html();
        $(padre).remove();
        $.post("eliminarcomentario.php", {texto:hermanos},function(){});
    });
});