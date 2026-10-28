<?php
    require_once("conexion.php");

    $usuario = $_POST['nombreUsuario'];
    $correo = $_POST['correoUsuario'];
    
    $sqlinsert="INSERT INTO usuarios (nombre, correo) VALUES (?,?)";

    $stmt=$conexion->prepare($sqlinsert);
    $stmt->bind_param("ss",$usuario,$correo);

    if($stmt->execute()) {
        header("Location: modulo1.php?estado=exito");
    } else {
        header("Location: modulo1.php?estado=error");
    }      

?>