<?php
//conectar bd
$bd = include("../modelo/bd.php");
//recibir id
$id = $_GET['id'];
echo "<p> este es el id: " .$id. "</p>";
//sentencia para eliminar el registro
$sentencia = $bd->prepare("DELETE FROM juegos WHERE id = ?");
//pasar el id a la funcion param
$sentencia->bind_param("i", $id);
//ejecutar sentencia para eliminar
$sentencia->execute();

header("Location: ../vista/listado_juegos.php");
