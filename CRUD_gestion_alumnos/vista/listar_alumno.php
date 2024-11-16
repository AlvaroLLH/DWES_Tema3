    <?php $titulo = "listar_alumno"; 
    include("encabezado.php");
    
    // Incluimos la conexión a la base de datos
    include("../config/conexion.php"); 
    
    // Consulta SQL para seleccionar todos los registros de la tabla "alumnos"
    $sql = "SELECT * FROM alumnos";

    // Almacenar los resultados en un array asociativo
    $resultados = $mysqli_conexion -> query($sql);

    // Mostramos un mensaje en caso de error al realizar la consulta
    if(!$resultados){
        die("Error al realizar la consulta: " . $mysqli_conexion -> error);
    }

    ?>

    <link rel="stylesheet" href="style.css">

    <h1>Listado de Alumnos</h1>

    <!-- Tabla HTML para mostrar los registros -->
    <table>
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>1º Apellido</th>
                <th>2º Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Curso</th>
            </tr>
        </thead>
        <tbody>

            <?php

            // Verificamos si hay filas para mostrar
            if($resultados -> num_rows > 0){
                while($fila = $resultados -> fetch_assoc()){
                    echo "<tr>";
                    echo "<td>" . ($fila['dni']) . "</td>"; // DNI
                    echo "<td>" . ($fila['nombre']) . "</td>"; // Nombre
                    echo "<td>" . ($fila['apellido1']) . "</td>"; // 1º Apellido
                    echo "<td>" . ($fila['apellido2']) . "</td>"; // 2º Apellido
                    echo "<td>" . ($fila['email']) . "</td>"; // Email
                    echo "<td>" . ($fila['telefono']) . "</td>"; // Teléfono
                    echo "<td>" . ($fila['curso']) . "</td>"; // Curso
                    echo "</tr>";
                }
                
            } else {

                // Si no hay registros, mostramos un mensaje
                echo "<tr><td colspan='4'>No hay registros disponibles.</td></tr>";
            }

            ?>

        </tbody>
    </table>

    <?php include("pie.php"); ?>