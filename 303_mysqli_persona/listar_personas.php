<?php

    // listar.personas.php

    // Función que conecta a la base de datos
    function conexion(){
        // Conectamos
        return include("conexion.php");
    }

    // CONSULTA A LA BASE DE DATOS
    $mysqli_conexion = conexion(); // Guardamos la conexión

    $consulta = "SELECT * FROM persona"; // Guardamos la consulta
    $resultado = $mysqli_conexion -> query($consulta);

    // En caso de error en la consulta, devolvemos un mensaje de error
    if(!$resultado){
        die("Error en la consulta: " . $mysqli_conexion -> error);
    }

?>

    <title>Listar Personas</title>

    <h1>Lista de Personas</h1>

    <!-- Tabla que muestra los datos de las personas -->
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Teléfono</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>

            <?php

            // Verificamos si hay filas que mostrar
            if($resultado -> num_rows > 0){
                while($fila = $resultado -> fetch_assoc()){
                    echo "<tr>";
                        echo "<td>" . ($fila['id_persona']); // ID
                        echo "<td>" . ($fila['nombre']); // Nombre
                        echo "<td>" . ($fila['apellidos']); // Apellidos
                        echo "<td>" . ($fila['telefono']); // Teléfono
                        echo "<td>" . ($fila['edad']); // Edad
                    echo "</tr>";
                }

                // Si no, mostramos un mensaje
            } else {
                echo "<tr><td colspan = '4'>No hay registros disponibles</td></tr>";
            }

            ?>

        </tbody>
    </table>

    <?php // Liberamos memoria y cerramos la conexión
    $resultado -> free();
    $mysqli_conexion -> close(); ?>