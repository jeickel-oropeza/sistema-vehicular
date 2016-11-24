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
      case 'mantenimiento':
        if ($_POST) {
          $vehiculos->Mantenimiento();
        }else{
          include('views/template/mantenimiento.php');
        }
      break;
      case 'kilometraje':
      if ($_POST) {
        $vehiculos->Kilometraje();
      }else {
        include('views/template/kilometraje.php');
      }
      break;

    default:
      include('views/template/allvehiculos.php');
      break;
  }
 ?>
