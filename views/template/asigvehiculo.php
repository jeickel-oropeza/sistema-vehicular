<?php include('views/overall/header.php'); ?>
<body>
  <?php include('views/overall/topnav.php'); ?>

    <div class="col-sm-6">
        <h2>Datos del Vehiculo</h2>

          <div class="col-sm-12">
            <?php

            if(false != $_vehiculos) {
             $HTML = '<table id="table-vehiculo" class="table table-hover"><thead><tr>
             <th>Placa</th>
             <th>Marca</th>
             <th>Modelo</th>
             </tr></thead>
             <tbody>';
              foreach($_vehiculos as $id_vehiculo => $vehiculo_array) {
                if ($_vehiculos[$id_vehiculo]['estatus'] == 1) {
                  $HTML .= '<tr id='.$_vehiculos[$id_vehiculo]['id'].'>
                    <td>'.$_vehiculos[$id_vehiculo]['placa'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['marca'].'</td>
                    <td>'.$_vehiculos[$id_vehiculo]['modelo'].'</td>
                  </tr>';
                } 
              }
              $HTML .= '</tbody></table>';
            } else {
              $HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ningun vehiculo registrado o disponible.</div>';
            }

            echo $HTML;
            ?>
          </div>
        </div>


    <div class="col-sm-6">
        <h2>Datos de la Persona</h2>

          <div class="col-sm-12">
            <?php

            if(false != $_personas) {
             $HTML = '<table id="table-persona" class="table table-hover"><thead><tr>
             <th>Nombre</th>
             <th>Apellido</th>
             <th>Cedula</th>
             </tr></thead>
             <tbody>';
              foreach($_personas as $id_persona => $persona_array) {
                  $HTML .= '<tr id='.$_personas[$id_persona]['id'].'>
                    <td>'.$_personas[$id_persona]['nombre'].'</td>
                    <td>'.$_personas[$id_persona]['apellido'].'</td>
                    <td>'.$_personas[$id_persona]['cedula'].'</td>
                  </tr>';
              }
              $HTML .= '</tbody></table>';
            } else {
              $HTML = '<div class="alert alert-dismissible alert-info"><strong>INFORMACIÓN: </strong> Todavía no existe ninguna persona registrada.</div>';
            }

            echo $HTML;
            ?>
          </div>
    </div>
    <center><button name="asignar" value="Ingresar" id = "btn_asignar" onclick = "" class ="btn btn-default disabled">Asignar</button></center>


  <?php include('views/overall/footer.php') ?>
</body>
</html>
