<?php

    // Incluimos la conexión a la base de datos
    include("../config/conexion.php");

    // Recogemos los datos y los guardamos en variables
    $dni = $_POST["dni"]; // Guardamos el dni
    $nombre = $_POST["nombre"]; // Guardamos el nombre
    $apellido1 = $_POST["apellido1"]; // Guardamos el primer apellido
    $apellido2 = $_POST["apellido2"]; // Guardamos el segundo apellido
    $email = $_POST["email"]; // Guardamos el email
    $telefono = $_POST["telefono"]; // Guardamos el teléfono
    $curso = $_POST["curso"]; // Guardamos el curso
?>