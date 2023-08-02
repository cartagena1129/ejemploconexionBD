<?php
//incluir conexion bd
$bd = include("../modelo/bd.php");

//sentencia para traer los resultados
$sentencia = $bd->query("SELECT * FROM  Juegos");

//convertir los resultados en un array
$registros = $sentencia->fetch_all(MYSQLI_ASSOC);

return $registros;
