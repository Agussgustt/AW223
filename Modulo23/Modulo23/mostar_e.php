<?php
    require_once __DIR__ . "/conexion.php";

    function mostrarEquipo()
    {
        global $conexion;

        $sqlequipos = "SELECT id_equipo, nombre_equipo from equipos";

        try{
            $rsmsj=mysqli_query($conexion, $sqlequipos);
            return $rsmsj;

        }catch(Exception $e){
            
            die("Algo paso al consultar la base de datos".$e ->getMessage());


        }

    }
?>