<?php
    $texto= $_POST['texto'];
echo "me ha llegado un texto = " . $texto;
    $connection= mysqli_connect('localhost', 'root', 'root', 'comentarios') or die("ola ke ase conecta o que hace");
    $resultado= $connection->query("SELECT texto FROM comentario");
    $connection->query("INSERT INTO comentario VALUES('$texto')") or die("La consulta no funciona");

echo "todo funciona de maravilla";
?>