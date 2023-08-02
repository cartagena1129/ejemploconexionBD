<?php
    //varibles de conexion
    $host = "localhost";
    $user = "root";
    $bd = "videojuegos";
    $contra = "";

    //conexion bd
    $conexion = new mysqli($host, $user,$contra,$bd);
    //comprobar conexion
    if( $conexion->connect_error){
        echo "no se pudo conectar a la bd ". $conexion->connect_error;
        exit();
    }else{
        //echo "exito";
    }

    //retornar el objeto conexion
    return $conexion;

