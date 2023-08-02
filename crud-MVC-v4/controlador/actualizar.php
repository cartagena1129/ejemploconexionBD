<?php
$bd = include("bd.php");
//recibo variables del formulario editar
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$des = $_POST['descripcion'];
$img = $_POST['imagen'];
$ruta = "http://localhost/crud-sencillo/imagenes/$img";

//sentencia para guardar los cambios
$sentencia = $bd->prepare("UPDATE juegos SET nombre = ?, 
descripcion = ?,
imagen = ?
WHERE id = ?");
//parametros
$sentencia->bind_param("sssi", $nombre, $des, $ruta, $id);
$sentencia->execute();
header("Location: listado_juegos.php");
