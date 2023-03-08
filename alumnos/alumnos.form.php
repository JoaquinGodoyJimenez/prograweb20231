<h1>Datos de alumno</h1>
<form class="row g-3" method="POST" enctype="multipart/form-data" action="alumnos.php?accion=<?php echo ($accion); ?>">
  <div class="col-auto">

    <label for="staticEmail2" class="visually-hidden">
      No Control:</label>
    <input type="text" class="form-control-plaintext" id="n_control" name="n_control" value="<?php echo (isset($datos['n_control'])) ? $datos['n_control'] : ''; ?>" required>
  </div>
  <div class="col-auto">
    <label for="staticEmail2" class="visually-hidden">Apodo:</label>
    <input type="text" class="form-control-plaintext" id="apodo" name="apodo" value="<?php echo (isset($datos['apodo'])) ? $datos['apodo'] : ''; ?>" required>
  </div>
  <div class="col-auto">
  <label for="fotografia" class="visually-hidden">Fotografía:</label>
    <input type="file" class="form-control" name="fotografia"/>
  </div>
  <div class="col-auto">
    <input type="submit" class="btn btn-primary mb-3" name="guardar" value="Guardar" />
  </div>
  <?php if ($accion=='actualizar'): ?>
    <input type="hidden" name="n_control_old" value="<?php echo $datos['n_control']?>"/>_
    <?php endif; ?>
</form>