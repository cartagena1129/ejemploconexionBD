<?php
//incluir conexion bd
$bd = include("../modelo/bd.php");

if( isset($_FILES['imagen'])){
    //varibles del formulario
$nombre = $_POST['nombre'];
$des = $_POST['descripcion'];
$img = $_FILES['imagen']['name'];
//ruta imagenes
$ruta = "http://localhost/crud-sencillo-v2/imagenes/$img";

$directorio = $_SERVER['DOCUMENT_ROOT']."/crud-sencillo-v2/imagenes/";
$subir_img_proyecto = $directorio.basename($_FILES['imagen']['name']);

    if(move_uploaded_file($_FILES['imagen']['tmp_name'], $subir_img_proyecto)){

        $sentecia = $bd->prepare("INSERT INTO 
        Juegos (nombre, descripcion, imagen)
        values (?, ?, ?)");
        
        //pasar los datos a la sentencia
        $sentecia->bind_param("sss",$nombre, $des, $ruta);
        
        //comprobar si se registraron los datos
        if($sentecia->execute()){
            echo "<script>  alert('Se registraron los datos')  </script>";
        }else{
            echo "<script>  alert('Error en los datos')  </script>";
        }
        Header("Location: ../vista/listado_juegos.php");

    }else{
        echo "No se pudo guardar la imagen en el directorio";
    }

}else{
    echo "no se envio ";
}


