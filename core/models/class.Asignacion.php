<?php

  class Asignacion {

    private $db;
    private $id;
    private $idVehiculo;
    private $idPersona;

    public function __construct(){
      $this->db = new Conexion();
    }

    private function Errors($url){
      try {
        if (empty($_POST['id_vehiculo']) && empty($_POST['id_persona'])) {
          throw new Exception(1);
        }else {
          $this->idVehiculo = $_POST['id_vehiculo'];
          $this->idPersona = $_POST['id_persona'];
        }
      } catch (Exception $error) {
        header('location: '.$url .$error->getMessage());
        exit;
      }
    }

    public function Add(){
        $this->Errors('?view=asignacion&mode=add&error=');

        $sql = "INSERT INTO asignacion (id_vehiculo,id_persona) VALUES ('$this->idVehiculo','$this->idPersona');";
        $sql .= "UPDATE vehiculo SET estatus=1 WHERE id='$this->idVehiculo';";
        $this->db->multi_query($sql);
 
        header('location: ?view=asignacion&mode=add&success=true');  
    }

    public function __destruct(){
      $this->db->close();
    }

  }


 ?>
