<?php

    $host = 'localhost';
    $usuario = 'root';
    $contraseña = '1528';
    $basedatos = 'softpaws';

    $conexion = new mysqli($host,$usuario,$contraseña,$basedatos);

    if ($conexion->connect_errno) {
        echo "fallos en conexión";
        exit();
    }
?>