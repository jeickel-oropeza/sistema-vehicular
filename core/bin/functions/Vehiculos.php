<?php

  function Vehiculos() {
    $db = new Conexion();
    $sql = $db->query("SELECT * FROM vehiculo;");
    if ($db->rows($sql) > 0) {
      while ($data = $db->recorrer($sql)) {
        $vehiculos[$data['id']] = $data;
      }
    }else{
      $vehiculos = false;
    }
    $db->liberar($sql);
    $db->close();
    return $vehiculos;
  }
 ?>
