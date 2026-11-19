<?php

    require_once("conexion.php");

    $nombre= $_POST["nombre"];
    $apellido= $_POST["apellido"];
    $nacimiento= $_POST["nacimiento"];

    $sqlInsert = "INSERT INTO formulario(nombre,apellido,nacimiento) VALUES(?,?,?)";
    
    $stmt = $conexion->prepare($sqlInsert);
    $stmt->bind_param("ssi",$nombre, $apellido, $nacimiento);
    $stmt->execute();

    $stmt->close();
    $conexion->close();
