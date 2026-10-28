<?php
    require_once("conexion.php");

    $id_solicitud = $_POST['id_solicitud'];
    $estado = $_POST['estado'];
    $observacion = $_POST['observacion'];
    
    $sqlinsert="INSERT INTO solicitudes (id_solicitud, estado, observacion) VALUES (?,?,?)";

    $stmt=$conexion->prepare($sqlinsert);
    $stmt->bind_param("iss",$id_solicitud,$estado,$observacion);

    if($stmt->execute()) {
        header("Location: index.php ?estado=exito");
    } else {
        header("Location: index.php ?estado=error");
    }      

?>