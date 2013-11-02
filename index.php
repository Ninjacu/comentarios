<?php
    $connection= mysqli_connect('localhost', 'root', 'root', 'comentarios') or die("ola ke ase conecta o que hace");
    $resultado= $connection->query("SELECT texto FROM comentario");
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="Shortcut Icon" type="image/ico" href="http://labolaocho.com/wp-content/uploads/favicon2.ico" />
    <link rel="stylesheet" href="estilos.css">
    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <meta charset="utf-8">
    <title>Comentarios</title>
</head>
<body>
    <span id="titulo">Comentarios</span>
    <textarea id="comentarios" placeholder="Escriba aquí su comentario"></textarea>
    <button id="enviar">Enviar</button>
    <div id="comentarios-escritos">
        <?php
        $arrayResultado= mysqli_fetch_array($resultado);
        $final= $arrayResultado[0];
        $fecha= date("H:i:s");
        echo "<div class='comentario-enviado'>"."<span class='fecha'>".($fecha)."   "."</span>".($final)."   "."<img class='eliminar' src='error.png'>"."</img>"."</div>";
        ?>
    </div>
</body>
</html>