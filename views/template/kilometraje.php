<?php include('views/overall/header.php'); ?>
<body>
  <?php include('views/overall/topnav.php'); ?>

  <section class="form-container" style="padding: 20px;">
    <?php
    if(isset($_GET['success'])) {
      echo '<div class="alert alert-dismissible alert-success">
        <strong>Completado!</strong> Se ha registrado con exito.
      </div>';
    }
    ?>
  	<center><h2>Actualizar kilometraje</h2></center>
    <form class="form" method="POST" action="?view=vehiculos&mode=kilometraje" enctype="application/x-www-form-urlencoded">
      <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
      <div class="form-group">
        <label class="col-sm-2 control-label">Placa</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="placa" value=<?php echo $_vehiculos[$_GET['id']]['placa']; ?> disabled="true">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Marca</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="marca" value=<?php echo $_vehiculos[$_GET['id']]['marca']; ?> disabled="true">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Modelo</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="modelo" value=<?php echo $_vehiculos[$_GET['id']]['modelo']; ?> disabled="true">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tipo de vehiculo</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="tipo" value=<?php echo $_vehiculos[$_GET['id']]['tipo']; ?> disabled="true">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Año</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="año" value=<?php echo $_vehiculos[$_GET['id']]['año']; ?> disabled="true">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Kilometraje</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" name="kilometraje" value=<?php echo $_vehiculos[$_GET['id']]['kilometraje']; ?>>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-2">
          <button type="submit" class="form-control btn btn-primary" name="actualizar">Actualizar</button>
        </div>
      </div>
    </form>
  </section>

  <?php include('views/overall/footer.php'); ?>
</body>
</html>
