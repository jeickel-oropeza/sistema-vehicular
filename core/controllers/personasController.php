<?php
  require('core/models/class.Personas.php');
  $personas = new Personas;

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'add':
      if ($_POST) {
        $personas->Add();
      }else{
        include('views/template/regpersonas.php');
      }
      break;

    default:
      include('views/template/allpersonas.php');
      break;
  }
 ?>
