<?php
  function Personas() {
    $db = new Conexion();
    $sql = $db->query("SELECT * FROM persona;");
    if ($db->rows($sql) > 0) {
      while ($data = $db->recorrer($sql)) {
        $personas[$data['id']] = $data;
      }
    }else {
      $personas = false;
    }
    $db->liberar($sql);
    $db->close();
    return $personas;
  }
 ?>
