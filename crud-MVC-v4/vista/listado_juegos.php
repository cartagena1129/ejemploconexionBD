
<!-- Tabla de registros -->
<?php
 $lista = include("../controlador/listado.php"); 

include("header.php"); 
?>
<!-- incluir el header -->
<div class="row">
  <div class="col-12">
    <h1 class="text-center"> Listado de Juegos </h1>
  </div>
  <div class="offset-9 col-3">
    <a href="formulario.php" class="btn btn-primary">Crear Juego</a>
  </div>
  <div class="col-12">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">NOMBRE</th>
          <th scope="col">SINOPSIS</th>
          <th scope="col">IMAGEN</th>
          <th scope="col">Editar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody>
        <?php  $con = 1;
         foreach($lista as $registro) { ?>
        <tr>
          <th> <?php echo $con ++; ?> </th>
          <td><?php echo $registro["nombre"]; ?></td>
          <td><?php echo $registro["descripcion"]; ?></td>
          <td> <img src="<?php echo $registro["imagen"]; ?>" width="30%"> </td>
          <td> <a href="editar.php?id=<?php echo $registro["id"];?>" class="btn btn-warning"> Editar </a> </td>
          <td><a href="../controlador/eliminar.php?id=<?php echo $registro["id"];?>" class="btn btn-danger"> Eliminar </a></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<!-- incluir el footer -->
<?php include("footer.php"); ?>