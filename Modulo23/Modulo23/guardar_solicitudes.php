<?php
    require_once("conexion.php");

    $descripcion = $_POST['descripcion'];
    $usuario = $_POST['id_usuario'];
    $equipo = $_POST['id_equipo'];
    
    $sqlinsert="INSERT INTO solicitudes (descripcion, id_usuario, id_equipo) VALUES (?,?,?)";

    $stmt=$conexion->prepare($sqlinsert);
    $stmt->bind_param("sii",$descripcion, $usuario, $equipo);

    if($stmt->execute()) {
        header("Location: modulo2.php?estado=exito");
    } else {
        header("Location: modulo2.php?estado=error");
    }      

?>