<?php

    require_once("conexion.php");

    $nombre= $_POST["txtnombre"];
    $correo= $_POST["txtcorrep"];
    $mensaje= $_POST["txtmensaje"];

    $sqlInsert="INSERT INTO mensajes(nombre,correo,mensaje)
                            VALUES(?,?,?)";

    $stmt+$conexion->prepare($sqlInsert);
    $stmt->blind_param("sss",$nombre,$correo,$mensaje);

    if($stmt->execute()){
        echo "Mensaje Guardado"
    }else{
        echo "No se Guardo el Mesaje"
    }