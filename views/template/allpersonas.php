<?php include('views/overall/header.php'); ?>
<body>
  <?php include('views/overall/topnav.php'); ?>

    <div class="col-sm-12">
        <center><h1>Personas Registradas</h1></center>

          <div class="col-md-12">
            <?php

            if(false != $_personas) {
             $HTML = '<table class="table table-hover"><thead><tr>
             <th>Nombre</th>
             <th>Apellido</th>
             <th>Cedula</th>
             </tr></thead>
             <tbody>';
              foreach($_personas as $id_persona => $persona_array) {
                  $HTML .= '<tr>
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

  <?php include('views/overall/footer.php') ?>
</body>
</html>
