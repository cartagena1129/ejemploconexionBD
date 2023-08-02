
<?php
    //recibiendo los datos
    $juego = include("../controlador/editando.php");
    //recibo el id del listado
    include("header.php"); 
?>
<div class="col-sm-6 offset-sm-3">
    <h1 class="text-center">Editar videojuegos</h1>
    <form action="../controlador/actualizar.php" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre del Juego</label>
            <input name="nombre" value="<?php echo $juego['nombre']; ?>" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo Mario">
        </div>
        <input type="hidden" name="id" value="<?php echo $juego['id'];?>">
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Sinopsis del Juego</label>
            <input name="descripcion" value="<?php echo $juego['descripcion']; ?>" class="form-control" id="exampleFormControlTextarea1" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Imagen del Juego</label>
            <img src="<?php echo $juego['imagen']; ?>" alt="" width="50%"><br>
            <input name="imagen" type="file" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Guardar Juego</button>
        </div>
    </form>
</div>
<?php include("footer.php"); ?>