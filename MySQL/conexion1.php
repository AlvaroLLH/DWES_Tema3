<?php

// conexion1.php

// "SERVIDOR", "USUARIO", "PASSWORD", "BASE DE DATOS"
$conexion = mysqli_connect("localhost", "root", "", "pruebas");

// COMPROBAMOS LA CONEXIÓN
    if (mysqli_connect_errno()) { // if(!$conexion)
        echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
        exit();
    }
    echo "<h1>Bienvenid@ a MySQL !! </h1>";

?>