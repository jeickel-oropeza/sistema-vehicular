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
  	<center><h2>Registro de personas</h2></center>
    <form class="form" method="POST" action="?view=personas&mode=add" enctype="application/x-www-form-urlencoded">
      <div class="form-group">
        <label class="col-sm-2 control-label">Nombre</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Nombre" name="nombre">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Apellido</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Apellido" name="apellido">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Cedula</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Cedula" name="cedula">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-2">
          <button type="submit" class="form-control btn btn-primary" name="registrar">Registrar</button>
        </div>
      </div>
    </form>
  </section>

  <?php include('views/overall/footer.php') ?>
</body>
</html>
