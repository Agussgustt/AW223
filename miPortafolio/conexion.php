<?php

$servidor="localhost";
$usuario="root";
$password="";
$baseDatos="portafolio_db";

$conexion= new mySQLi($servidor,$usuario,$password,$baseDatos);

if($conexion->connect_error){
    die("Error de conexion: "$conexion->connect_error);
}

echo "Conexion Exitosa";