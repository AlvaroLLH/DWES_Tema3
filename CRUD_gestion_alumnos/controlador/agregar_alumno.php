<?php

    // Incluimos la conexión a la base de datos
    include("../config/conexion.php");

    // Array que almacena el error y un mensaje
    $resultado = [
        'error' => false,
        'mensaje' => '',
    ];

    // Comprobamos si el alumno se ha agregado correctamente
    if(isset($_POST['submit'])){

        // Verificamos que todos los campos estén presentes
        if(isset($_POST['dni'], $_POST['nombre'], $_POST['apellido1'], $_POST['apellido2'], $_POST['email'], $_POST['telefono'],
        $_POST['curso'])){

    // Creamos el array asociativo alumno para almacenar los datos
    $alumno = array(
    "dni" => $_POST['dni'], // Guardamos el dni
    "nombre" => $_POST['nombre'], // Guardamos el nombre
    "apellido1" => $_POST['apellido1'], // Guardamos el primer apellido
    "apellido2" => $_POST['apellido2'], // Guardamos el segundo apellido
    "email" => $_POST['email'], // Guardamos el email
    "telefono" => $_POST['telefono'], // Guardamos el teléfono
    "curso" => $_POST['curso'], // Guardamos el curso
    );
    
    // Creamos la consulta SQL para insertar los datos en la tabla
    $consultaSQL = "INSERT INTO alumnos (DNI, nombre, apellido1, apellido2, email, telefono, curso) VALUES(?, ?, ?, ?, ?, ?, ?)";

    // Usamos consultas preparadas con mysqli
    if($stmt = $mysqli_conexion -> prepare($consultaSQL)) {
        $stmt -> bind_param("sssssss", $alumno['dni'], $alumno['nombre'], $alumno['apellido1'], $alumno['apellido2'],
        $alumno['email'], $alumno['telefono'], $alumno['curso']);

        if($stmt -> execute()){
            $resultado['mensaje'] = 'Alumno agregado con éxito';
        } else {
            $resultado['error'] = true;
            $resultado['mensaje'] = 'Error al agregar el alumno';
        }
        $stmt -> close();
    } else {
        $resultado['error'] = true;
        $resultado['mensaje'] = 'Error en la consulta SQL';
    }
        } else {
            $resultado['error'] = true;
            $resultado['mensaje'] = 'Faltan datos en el formulario';
        }
    }

    // Mostramos el mensaje de resultado
    if($resultado['error']){
        echo '<p>Error: ' . $resultado['mensaje'] . '</p>';
    } else {
        echo '<p>' . $resultado['mensaje'] . '</p>';
    }

?>