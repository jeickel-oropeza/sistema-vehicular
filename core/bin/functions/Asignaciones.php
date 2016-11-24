<?php 
	function Asignaciones() {
		$db = new Conexion();
		$sql = $db->query("SELECT placa, marca, modelo, nombre, apellido, cedula, fecha FROM asignacion
                                INNER JOIN vehiculo ON vehiculo.id = asignacion.id_vehiculo
                                INNER JOIN persona ON persona.id = asignacion.id_persona;");
        if ($db->rows($sql) > 0) {
        	while ($data = $db->recorrer($sql)) {
        		$asignaciones[$data['id']] = $data;
        	}
        } else {
        	$asignaciones = false;
        }
        $db->liberar($sql);
        $db->close();
        return $asignaciones;
	}
 ?>