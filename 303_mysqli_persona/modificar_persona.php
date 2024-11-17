<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Persona</title>
</head>
<body>

    <?php

    // Conectamos a la BD
    include("conexion.php");

    // Verificamos si se recibe el ID de la persona
    if(!isset($_GET["id_persona"])){
        die("No se recibió el ID de la persona");
    }

    // Guardamos ID
    $id_persona = intval($_GET["id_persona"]);

    // Obtenemos los datos actuales de la persona
    $consulta = $mysqli_conexion -> prepare("SELECT nombre, apellidos FROM persona WHERE id_persona = ?");

    // Verificamos si la consulta se preparó correctamente
    if(!$consulta){
        die("Error al preparar la consulta " . $mysqli_conexion -> error);
    }

    // Asignamos el tipo a las variables, ejecutamos la consulta y guardamos el resultado
    $consulta -> bind_param("i", $id_persona);
    $consulta -> execute();
    $resultado = $consulta -> get_result();

    // Verificamos que la persona exista
    if($resultado -> num_rows === 0){
        die("No se encontró a ninguna persona con ese ID");
    }

    // Obtenemos los datos actuales
    $persona = $resultado -> fetch_assoc();
    $nombre = $persona['nombre'];
    $apellidos = $persona['apellidos'];

    // Cerramos la consulta
    $consulta -> close();

    // Procesamos los datos enviados por el formulario
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $nombre = trim($_POST["nombre"]);
        $apellidos = trim($_POST["apellidos"]);

        // Validamos que los campos no estén vacíos
        if(empty($nombre) || empty($apellidos)){
            die("El nombre y/o los apellidos no pueden estar vacíos");
        }

        // Preparamos la consulta de actualización
        $consultaUpdate = $mysqli_conexion -> prepare("UPDATE persona SET nombre = ?, apellidos = ? WHERE id_persona = ?");

        if(!$consultaUpdate){
            die("Error al preparar la consulta: " . $mysqli_conexion -> error);
        }

        $consultaUpdate -> bind_param("ssi", $nombre, $apellidos, $id_persona);

        // Ejecutamos la consulta y verificamos
        if(!$consultaUpdate -> execute()){
            die("Error al ejecutar la consulta: " . $consultaUpdate -> error);
        }

        // Cerramos la consulta y desconectamos
        $consultaUpdate -> close();
        $mysqli_conexion -> close();

        // Redirigimos al listado actualizado
        header("Location: listar_personas.php");
        exit;
    }

    ?>

    <!-- Mostramos el formulario con los datos actuales -->
    <h1>Actualizar Persona</h1>
    <form action="" method="POST">

        <label for="nombre">Nombre</label><br>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre; ?>" required><br><br>

        <label for="apellidos">Apellidos</label><br>
        <input type="text" id="apellidos" name="apellidos" value="<?php echo $apellidos; ?>" required><br><br>

        <button type="submit">Actualizar</button>

    </form>
    
</body>
</html>