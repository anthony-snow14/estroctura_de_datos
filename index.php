<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<main class="container p-4">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->
      <div class="card card-body">
        <form action="save_task.php" method="POST">
          <div class="form-group">
            <input type="text" name="inventario" class="form-control" placeholder="folio" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Descripcion"></textarea>
            </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="precio"></textarea>
            </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="cantidad"></textarea>
            </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Save Task">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>folio de compra</th>
            <th>Descripcion</th>
            <th>precio</th>
            <th>cantidad</th>
            </div>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM spacecase";
          $resultado_tasks = $conexion->query($sentencia) or die (mysql_error($conexion));    

          while($fila=$resultado->fetch_assoc())
          {
           {
          echo "<tr>";
            echo "<td>"; echo $fila['folio_compra']; echo "</td>";
            echo "<td>"; echo $fila['descripcion']; echo "</td>";
            echo "<td>"; echo $fila['precio']; echo "</td>";
            echo "<td>"; echo $fila['cantidad']; echo "</td>";
            echo "<td><a href='modif_prod1.php?no=".$fila['no']."'> <button type='button' class='btn btn-success'>Modificar</button> </a></td>";
            echo " <td><a href='eliminar_prod.php?no=".$fila['no']."'> <button type='button' class='btn btn-danger'>Eliminar</button> </a></td>";
          echo "</tr>";
        }
      ?>
                       </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include('includes/footer.php'); ?>
