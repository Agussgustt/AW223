<?php
    require_once("conexion.php");

    $id_solicitud = $_POST['id_solicitud'];
    $estado = '"' . $_POST['estado'] . '"';
    $observacion = $_POST['observacion'];

    $sqlupdate = "UPDATE solicitudes SET estado=?, observacion=? WHERE id_solicitud=?";

    $stmt = $conexion->prepare($sqlupdate);
    $stmt->bind_param("ssi", $estado, $observacion, $id_solicitud);

    if ($stmt->execute()) {
        header("Location: modulo3.php?estado=exitoActualizar");
    } else {
        header("Location: modulo3.php?estado=errorActualizar");
    }
    exit;
?>