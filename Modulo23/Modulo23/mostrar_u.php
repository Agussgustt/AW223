<?php
    require_once __DIR__ . "/conexion.php";

    function mostrarUsario()
    {
        global $conexion;

        $sqlusuario= "SELECT id_usuario, nombre, correo from usuarios";

        try{
            $rsmsj=mysqli_query($conexion, $sqlusuario);
            return $rsmsj;

        }catch(Exception $e){
            
            die("Algo paso al consultar la base de datos".$e ->getMessage());


        }

    }
?>