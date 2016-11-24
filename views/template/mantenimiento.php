<?php include('views/overall/header.php'); ?>
<body>
<?php 
  include('views/overall/topnav.php');

  if(isset($_GET['error'])) {
    echo '<div class="alert alert-dismissible alert-danger">
        <strong>Error!</strong></strong> el nombre de la categoría no puede estar vacío.</div>';
  }
?>
  
    <div class="col-sm-12">
        <center><h1>Vehiculos Registrados</h1></center>

          <div class="col-md-12">
            <?php

            if(false != $_vehiculos) {
            ?>
             <table class="table table-hover" id="table"><thead><tr>
             <th>Placa</th>
             <th>Marca</th>
             <th>Modelo</th>
             <th>Tipo</th>
             <th>Año</th>
             <th>Kilometraje</th>
             <th>Actualizar kilometraje</th>
             <th>Enviar a mantenimiento</th>
             </tr></thead>
             <tbody>
             <?php
              foreach($_vehiculos as $id_vehiculo => $vehiculo_array) {
             ?>
              
                <tr style="<?php if ($_vehiculos[$id_vehiculo]['kilometraje'] > 2000){ echo "background-color: rgba(193, 30, 30, 0.4);"; }?>">
                  <td><?php echo $_vehiculos[$id_vehiculo]['placa'] ?></td>
                  <td><?php echo $_vehiculos[$id_vehiculo]['marca'] ?></td>
                  <td><?php echo $_vehiculos[$id_vehiculo]['modelo'] ?></td>
                  <td><?php echo $_vehiculos[$id_vehiculo]['tipo'] ?></td>
                  <td><?php echo $_vehiculos[$id_vehiculo]['año'] ?></td>
                  <td><?php echo $_vehiculos[$id_vehiculo]['kilometraje'] ?></td>
                  <?php
                  echo '<td><a href="?view=vehiculos&mode=kilometraje&id='.$_vehiculos[$id_vehiculo]['id'].'"><span class="glyphicon glyphicon-cog" style="margin-left: 26%;"><span></a></td>

                  <td id='.$_vehiculos[$id_vehiculo]['id'].'><a href="#" id="enviar">
                          <span class="glyphicon glyphicon-paste" style="margin-left: 26%;"><span>
                      </a>
                  </td>' ?>
                </tr>
              <?php } ?>
              </tbody></table>
              <div class="alert alert-danger" role="alert">Los vehiculos que se encuentran subrayados en rojo deben ser enviados a mantenimiento.</div>
            <?php
            } else {
            ?>
              <div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ningun vehiculo registrado.</div>
            <?php } ?>
          </div>
    </div>

  <?php include('views/overall/footer.php') ?>
</body>
</html>
