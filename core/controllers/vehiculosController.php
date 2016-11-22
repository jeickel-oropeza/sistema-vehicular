<?php
  require('core/models/class.Vehiculos.php');
  $vehiculos = new Vehiculos;

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'add':
      if ($_POST) {
        $vehiculos->Add();
      }else {
        include('views/template/regvehiculo.php');
      }
      break;

    default:
      include('views/template/allvehiculos.php');
      break;
  }
 ?>
