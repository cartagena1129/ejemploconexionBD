<?php
    //id del formulario
    echo $id = $_GET['id']; 
   //me conecto a la bd
    $bd = include("../modelo/bd.php");

    //sentencia sql
    $sentencia = $bd->prepare("SELECT * FROM juegos WHERE id = ?");
    $sentencia->bind_param("i", $id);
    $sentencia->execute();
    //resultado de la consulta
    $resul = $sentencia->get_result();
    //pasar resultado a un array
    $juego = $resul->fetch_assoc();
    
    //comprobar que tenemos el juego de la consulta
    if(!$juego){
        echo "No hay un juego con ese ID";
    }
    return $juego;
    
?>