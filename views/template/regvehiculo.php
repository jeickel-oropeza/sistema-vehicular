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
  	<center><h2>Registro de vehiculo</h2></center>
    <form class="form" method="POST" action="?view=vehiculos&mode=add" enctype="application/x-www-form-urlencoded">
      <div class="form-group">
        <label class="col-sm-2 control-label">Placa</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Placa" name="placa">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Marca</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Marca" name="marca">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Modelo</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Modelo" name="modelo">
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Tipo de vehiculo</label>
        <div class="col-sm-9">
          <select class="form-control" name="tipo">
            <option value="">Selecciona</option>
            <option value="sedan">Sedan</option>
            <option value="deportivo">Deportivo</option>
            <option value="rustico">Rustico</option>
            <option value="carga">Carga</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-2 control-label">Año</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" placeholder="Año" name="año">
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
