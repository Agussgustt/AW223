<?php
    require_once __DIR__ . "/conexion.php";

    function mostrarSolicitud()
    {
        global $conexion;

        $sqlsolicitud = "SELECT
            s.id_solicitud,
            u.nombre AS solicitante,
            e.nombre_equipo,
            s.descripcion AS problema,
            s.estado,
            s.observacion,
            s.fecha
        FROM solicitudes AS s
        LEFT JOIN usuarios AS u
            ON s.id_usuario = u.id_usuario
        LEFT JOIN equipos AS e
            ON s.id_equipo = e.id_equipo
        ORDER BY s.fecha ASC";

        try{
            $rsmsj=mysqli_query($conexion, $sqlsolicitud);
            return $rsmsj;

        }catch(Exception $e){
            
            die("Algo paso al consultar la base de datos".$e ->getMessage());


        }

    }
?>