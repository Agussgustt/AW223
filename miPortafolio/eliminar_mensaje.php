<?php

require_once("conexion.php");

if(isset($_GET['correo'])){
    $correo = $_GET['correo'];

    $sqlEliminar = "DELETE FROM mensajes WHERE correo = ?";

    $stmt = $conexion->prepare($sqlEliminar);
    $stmt->bind_param("s", $correo);

    if($stmt->execute()){
        header("Location: admin.php?estadophp=borrar_exito");
    }else{
        header("Location: admin.php?estadophp=borrar_error");
    }

    $stmt->close();
    $conexion->close();
} else {
    header("Location: admin.php?estadophp=error");
}