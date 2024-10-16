<?php
include("db.php");

include("includes/header.php");
?>
<main>
  <div class="container p-4">
    <div class="row">
      <!-- Columna para el formulario (a la izquierda) -->
      <div class="col-md-4">
        <form action="save.php" method="POST" class="formulario">
          <input type="text" name="alumno" class="form-control mb-3" placeholder="Nombre" autofocus>
          <textarea name="informes" class="form-control mb-3" placeholder="Informes"></textarea>
          <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
        </form>
      </div>

      <!-- Columna para la tabla (a la derecha) -->
      <div class="col-md-8">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Alumno</th>
              <th>Usuario</th>
              <th>Materias</th>
              <th>Notas</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = "SELECT * FROM boletines";
              $resultado = mysqli_query($conn, $query);
              while ($row = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
              <td><?php echo $row['id']; ?></td>
              <td><?php echo $row['alumno']; ?></td>
              <td><?php echo $row['usuario']; ?></td>
              <td><?php echo $row['materias']; ?></td>
              <td><?php echo $row['notas']; ?></td>
              <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Editar</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>
<?php
include("includes/footer.php");
?>