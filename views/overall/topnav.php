<header>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-center">
        <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Vehiculo <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="?view=vehiculos&mode=add">Registrar vehiculo</a></li>
           <li role="separator" class="divider"></li>
           <li><a href="?view=vehiculos">Consultar vehiculos</a></li>
         </ul>
       </li>
        <li><a href="?view=personas&mode=add">Persona</a></li>
        <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Asignacion <span class="caret"></span></a>
         <ul class="dropdown-menu">
           <li><a href="?view=asignacion&mode=add">Asignar vehiculo</a></li>
           <li role="separator" class="divider"></li>
           <li><a href="?view=asignacion">Consultar asignaciones</a></li>
         </ul>
       </li>
       <li><a href="?view=vehiculos&mode=mantenimiento">Mantenimiento</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </nav>
</header>
