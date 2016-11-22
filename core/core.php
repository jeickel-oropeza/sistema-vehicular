<?php

  # Notificar errores excepto E_NOTICE
  error_reporting(E_ALL ^ E_NOTICE);
  date_default_timezone_set('America/Caracas');

  # APP
  define('APP_TITLE', 'Sistema Vehicular');
  define('APP_URL', 'http://localhost:8080/invOperaciones/');

  # DB
  define('DB_HOST', 'localhost');
  define('DB_USER', 'root');
  define('DB_PASS', '');
  define('DB_NAME', 'investigacion');

  # Estructura
  require('autoload.php');
  require('core/models/class.Conexion.php');
  require('core/bin/functions/Vehiculos.php');
  require('core/bin/functions/Personas.php');

  $_personas = Personas();
  $_vehiculos = Vehiculos();
 ?>
