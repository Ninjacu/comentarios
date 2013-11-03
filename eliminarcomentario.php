<?php
$texto= $_POST['texto'];
echo "me ha llegado un texto = " . $texto;
$connection= mysqli_connect('localhost', 'root', 'root', 'comentarios') or die("ola ke ase conecta o que hace");
$sql = "DELETE FROM comentario WHERE texto = '$texto'";
echo "VOY A EJECUTAR UNA CONSULTA SQL  ASI : " . $sql;
$connection->query($sql) or die("La consulta no funciona");
echo "todo funciona de maravilla";
?>