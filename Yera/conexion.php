<?php

    // Realizar conexion
    // Error de conexion con mysql (Muestra errores)
    $host = "localhost";
    $user = "root";
    $pass = "";
    $datab = "prueba1";
    
    $con= new mysqli($host,$user,$pass,$datab);

    /* if(!($con= new mysqli($host,$user,$pass,$datab))){
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit();
    } */

?>