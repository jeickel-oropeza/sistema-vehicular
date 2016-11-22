<?php
  require('core/models/class.Asignacion.php');
  $asignacion = new Asignacion;

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'add':
      if ($_POST) {
        $asignacion->Add();
      }else{
        include('views/template/asigvehiculo.php');
      }
      break;

    default:
      include('views/template/allasignaciones.php');
      break;
  }
 ?>
