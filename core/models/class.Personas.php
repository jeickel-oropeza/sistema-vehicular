<?php

  class Personas {

    private $db;
    private $id;
    private $nombre;
    private $apellido;
    private $cedula;

    public function __construct(){
      $this->db = new Conexion();
    }

    private function Errors($url){
      try {
        if (empty($_POST['nombre']) && empty($_POST['apellido']) && empty($_POST['cedula'])) {
          throw new Exception(1);
        }else {
          $this->nombre = $this->db->real_escape_string($_POST['nombre']);
          $this->apellido = $this->db->real_escape_string($_POST['apellido']);
          $this->cedula = $this->db->real_escape_string($_POST['cedula']);
        }
      } catch (Exception $error) {
        header('location: '.$url .$error->getMessage());
        exit;
      }
    }

    public function Add(){
      $this->Errors('?view=personas&mode=add&error=');
      $this->db->query("INSERT INTO persona (nombre,apellido,cedula) VALUES ('$this->nombre','$this->apellido','$this->cedula');");
      header('location: ?view=personas&mode=add&success=true');
    }

    public function __destruct(){
      $this->db->close();
    }

  }


 ?>
