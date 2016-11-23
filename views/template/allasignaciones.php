<?php include('views/overall/header.php'); ?>
<body>
  <?php include('views/overall/topnav.php'); ?>

    <div class="col-sm-12">
      <center><h1>Asignaciones Realizadas</h1></center>
        <div class="col-md-12">
          <?php
            if(false != $_asignaciones) {
             $HTML = '<table class="table table-hover"><thead><tr>
             <th>Placa</th>
             <th>Marca</th>
             <th>Modelo</th>
             <th>Nombre</th>
             <th>Apellido</th>
             <th>Cedula</th>
             <th>Fecha</th>
             </tr></thead>
             <tbody>';
              foreach($_asignaciones as $id_asignacion => $asignacion_array) {
                  $HTML .= '<tr>
                    <td>'.$_asignaciones[$id_asignacion]['placa'].'</td>
                    <td>'.$_asignaciones[$id_asignacion]['marca'].'</td>
                    <td>'.$_asignaciones[$id_asignacion]['modelo'].'</td>
                    <td>'.$_asignaciones[$id_asignacion]['nombre'].'</td>
                    <td>'.$_asignaciones[$id_asignacion]['apellido'].'</td>
                    <td>'.$_asignaciones[$id_asignacion]['cedula'].'</td>
                    <td>'.$_asignaciones[$id_asignacion]['fecha'].'</td>
                  </tr>';
                }
              $HTML .= '</tbody></table>';
            } else {
              $HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no se ha asignado ningun vehiculo.</div>';
            }

            echo $HTML;
            ?>
        </div>
    </div>

  <?php include('views/overall/footer.php') ?>
</body>
</html>
