<?php

    // Conectamos a la base de datos
    include("conexion.php");

    // Leemos los datos del formulario
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $telefono = $_POST["telefono"];
    $edad = $_POST["edad"];

    // Validamos los datos insertados
    if(empty($nombre) || empty($apellidos) || empty($telefono) || empty($edad)){
        die("Todos los campos son obligatorios");
    }

    // Validamos que el tipo de dato insertado sea el correcto
    if(!is_numeric($telefono) || !is_numeric($edad)){
        die("El teléfono y la edad deben ser valores númericos");
    }

    // Preparamos la consulta de insert
    $consultaInsert = $mysqli_conexion -> prepare("INSERT INTO persona(nombre, apellidos, telefono, edad) value(?, ?, ?, ?)");

    // Vinculamos la variable al parámetro indicando tipo de valor, s para string, i para int
    $consultaInsert -> bind_param("ssii", $nombre, $apellidos, $telefono, $edad);

    // Ejecutamos la consulta, se asigna el valor al parámetro
    if($consultaInsert -> execute()){

        // Se ha ejecutado correctamente la consulta
        // Redireccionamos al listado de datos (listar_personas.php)
        header("Location: listar_personas.php");
        exit;

        // En caso de error, mostramos un mensaje
    } else {
        die("Ha ocurrido un error al ejecutar la consulta");
    }

    // Desconectamos
    $mysqli_conexion -> close();

?>