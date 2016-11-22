<?php include('views/overall/header.php'); ?>
<body>
  <?php include('views/overall/topnav.php'); ?>

  <div class="row categorias_con_foros">
    <div class="col-sm-12">
        <center><h1>Vehiculos Registrados</h1></center>

        <div class="row cajas">
          <div class="col-md-12">
            <?php

            if(false != $_vehiculos) {
              $disponible = 0;
              $asignado = 0;
              $mantenimiento = 0;
             $HTML = '<table class="table table-hover"><thead><tr>
             <th>Id</th>
             <th>Placa</th>
             <th>Marca</th>
             <th>Modelo</th>
             <th>Tipo</th>
             <th>Año</th>
             <th>Estatus</th>
             </tr></thead>
             <tbody>';
              foreach($_vehiculos as $id_vehiculo => $vehiculo_array) {
                if ($_vehiculos[$id_vehiculo]['estatus'] == 1) {
                  $disponible++;
                  $HTML .= '<tr>
                    <td>'.$_vehiculos[$id_vehiculo]['id'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['placa'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['marca'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['modelo'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['tipo'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['año'].'</td>
                    <td>Disponible</td>
                  </tr>';
                }else if ($_vehiculos[$id_vehiculo]['estatus'] == 0) {
                  $asignado++;
                  $HTML .= '<tr>
                    <td>'.$_vehiculos[$id_vehiculo]['id'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['placa'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['marca'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['modelo'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['tipo'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['año'].'</td>
                    <td>Asignado</td>
                  </tr>';
                }else if ($_vehiculos[$id_vehiculo]['estatus'] == 2) {
                  $HTML .= '<tr>
                    <td>'.$_vehiculos[$id_vehiculo]['id'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['placa'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['marca'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['modelo'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['tipo'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['año'].'</td>
                    <td>Mantenimiento</td>
                  </tr>';
                }
              }
              $HTML .= '</tbody></table>';
            } else {
              $HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ningun vehiculo registrado.</div>';
            }

            echo $HTML;
            echo 'Cantidad de vehiculos registrados: ' . count($_vehiculos) . '</br>';
            echo 'Cantidad de vehiculos disponibles: ' . $disponible . '</br>';
            echo 'Cantidad de vehiculos asignados: ' . $asignado . '</br>';
            echo 'Cantidad de vehiculos en mantenimiento: ' . $mantenimiento;
            ?>
          </div>
        </div>
    </div>
  </div>

  <?php include('views/overall/footer.php') ?>
</body>
</html>
