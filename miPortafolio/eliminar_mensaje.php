<?php

require_once("conexion.php");

if(isset($_GET['correo'])){
    $correo = $_GET['correo'];

    $sqlEliminar = "DELETE FROM mensajes WHERE correo = ?";

    $stmt = $conexion->prepare($sqlEliminar);
    $stmt->bind_param("s", $correo);

    if($stmt->execute()){
        echo "<script>
        alert('Mensaje eliminado correctamente');
        window.location.href = 'admin.php';</script>";
    }else{
        echo "<script>
        alert('Error al eliminar el mensaje');
        window.location.href = 'admin.php';</script>";
    }

    $stmt->close();
    $conexion->close();
} else {
    echo "<script>
    alert('Correo no proporcionado');
    window.location.href = 'admin.php';</script>";
}