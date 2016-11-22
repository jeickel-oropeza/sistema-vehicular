<?php

  class Vehiculos {

    private $db;
    private $id;
    private $placa;
    private $marca;
    private $modelo;
    private $tipo;
    private $año;

    public function __construct(){
      $this->db = new Conexion();
    }

    private function Errors($url){
      try {
        if (empty($_POST['placa']) && empty($_POST['marca']) && empty($_POST['modelo']) 
            && empty($_POST['tipo']) && empty($_POST['año'])) {
          throw new Exception(1);
        }else {
          $this->placa = $this->db->real_escape_string($_POST['placa']);
          $this->marca = $this->db->real_escape_string($_POST['marca']);
          $this->modelo = $this->db->real_escape_string($_POST['modelo']);
          $this->tipo = $this->db->real_escape_string($_POST['tipo']);
          $this->año = $this->db->real_escape_string($_POST['año']);
        }
      } catch (Exception $error) {
        header('location: '.$url .$error->getMessage());
        exit;
      }
    }

    public function Add(){
      $this->Errors('?view=vehiculos&mode=add&error=');
      $this->db->query("INSERT INTO vehiculo (placa,marca,modelo,tipo,año) 
                        VALUES ('$this->placa','$this->marca','$this->modelo','$this->tipo','$this->año');");
      header('location: ?view=vehiculos&mode=add&success=true');
    }

    public function __destruct(){
      $this->db->close();
    }

  }


 ?>
