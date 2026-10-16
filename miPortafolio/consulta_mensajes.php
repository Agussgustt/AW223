<?php

function consultaMensajes(){
    require_once "conexion.php";

    $selectMsj = "SELECT * FROM mensajes";

    try{
        $rsMsj = mysqli_query($conexion, $selectMsj);
        mysqli_close($conexion);
        return $rsMsj;
    }catch(Exception $e){
        die("Algo paso al consultar:"+$e->getMessage());
    }
}