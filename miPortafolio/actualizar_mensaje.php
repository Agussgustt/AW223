<?php

    require_once("conexion.php");

    $correo_viejo = $_POST["correo_viejo"];
    $nombre= $_POST["txtnombre"];
    $correo= $_POST["txtemail"];
    $mensaje= $_POST["txtmensaje"];


if(empty($nombre) || empty($correo) || empty($mensaje)){
    echo "<script>
    alert('Por favor, complete todos los campos');
    window.location.href = 'editar.php?id=$id&estadophp=vacio';</script>";
    exit();
}

$sqlActualizar = "UPDATE mensajes SET nombre = ?, correo = ?, mensaje = ? WHERE correo = ?";

$stmt = $conexion->prepare($sqlActualizar);
$stmt->bind_param("ssss", $nombre, $correo, $mensaje, $correo_viejo);

if($stmt->execute()){
    echo "<script>
    alert('Mensaje actualizado correctamente');
    window.location.href = 'admin.php';</script>";
}else{
    echo "<script>
    alert('Error al actualizar el mensaje');
    window.location.href = 'admin.php';</script>";
}

$stmt->close();
$conexion->close($conexion);
