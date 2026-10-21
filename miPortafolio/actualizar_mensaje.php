<?php

    require_once("conexion.php");

    $correo_viejo = $_POST["correo_viejo"];
    $nombre= $_POST["txtnombre"];
    $correo= $_POST["txtemail"];
    $mensaje= $_POST["txtmensaje"];


if(empty($nombre) || empty($correo) || empty($mensaje)){

    header("Location:editar.php?correo=$correo_viejo&estadophp=vacio");
    exit();
}

$sqlActualizar = "UPDATE mensajes SET nombre = ?, correo = ?, mensaje = ? WHERE correo = ?";

$stmt = $conexion->prepare($sqlActualizar);
$stmt->bind_param("ssss", $nombre, $correo, $mensaje, $correo_viejo);

if($stmt->execute()){
    header("Location: admin.php?estadophp=actualizacion_exito");
}else{
    header("Location: admin.php?estadophp=actualizacion_error");
}

$stmt->close();
$conexion->close($conexion);
