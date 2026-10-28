<?php
    require_once("conexion.php");

    $nombreEquipo = $_POST['nombreEquipo'];
    $descripcionEquipo = $_POST['descripcionEquipo'];

    
    $sqlinsert="INSERT INTO equipos (nombre_equipo, descripcion_equipo) VALUES (?,?)";

    $stmt=$conexion->prepare($sqlinsert);
    $stmt->bind_param("ss",$nombreEquipo,$descripcionEquipo);

    if($stmt->execute()) {
        header("Location: modulo1_equipos.php?estado=exito");
    } else {
        header("Location: modulo1_equipos.php?estado=error");
    }      

?>