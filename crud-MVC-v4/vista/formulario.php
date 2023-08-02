<?php include("header.php"); ?>
    <div class="col-sm-6 offset-sm-3">
        <h1 class="text-center">Crear video juegos</h1>
        <form action="../controlador/crear_juego.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nombre del Juego</label>
                <input name="nombre" required type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo Mario">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Sinopsis del Juego</label>
                <textarea name="descripcion" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Imagen del Juego</label>
                <input name="imagen" accept=".jpg, .png, .jpeg, .gif" type="file" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Guardar Juego</button>
            </div>
            <a class="btn btn-primary" href="listado_juegos.php"> Ir al listado </a>
        </form>
    </div>
            
<?php 
include("footer.php"); ?>