<?php

    require_once("conexion.php");
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $mensaje = $_POST["mensaje"];

    $sqlInsert = "INSERT INTO formulario(nombre,apellido,mensaje)
                                VALUES(?,?,?)";

    $stmt = $conexion -> prepare($sqlInsert);
    $stmt->bind_param("sss",$nombre,$apellido,$mensaje);

    if($stmt->execute()){
        header("Location:index.php?estado.php=exito");
    }else{
        header("Location:index.php?estado.php=error");
    }
