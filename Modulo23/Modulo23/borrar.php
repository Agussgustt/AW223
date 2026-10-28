<?php
    require_once("conexion.php");

    $id = isset($_GET['id_solicitud']) ? (int) $_GET['id_solicitud'] : 0;
    
    $sqldelete = "DELETE FROM solicitudes WHERE id_solicitud=?";

    $stmt = $conexion->prepare($sqldelete);
    $stmt->bind_param("i",$id_solicitud);

    if ($stmt->execute()) {
       header("Location: admin.php?estado=exitoBorrar");
    } else {
       header("Location: admin.php?estado=errorBorrar");
    }

    $stmt->close();
?>