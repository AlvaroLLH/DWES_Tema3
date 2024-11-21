<?php

    // Declaramos el titulo y la hoja de estilos a usar
    $titulo = "Listar Proyecto";
    $estilo = "css/estiloListar.css";

    // Incluimos el encabezado y la conexión
    include("encabezado.php");
    include("../config/conexion.php");

?>

<!-- Creamos la conexion y llamamos a su función -->
<h1><?php $conexion = conexion();?></h1>

    <!-- Try - catch -->
    <?php
    try {
        
        // Creamos la consulta
        $sql = "SELECT * FROM proyecto";

        // Preparamos la consulta
        $sentencia = $conexion -> prepare($sql);
        $sentencia -> setFetchMode(PDO::FETCH_OBJ);

        // Ejecutamos la consulta
        $sentencia -> execute();

        // Guardamos el número de filas
        $numFilas = $sentencia -> rowCount();

    ?>

    <!-- Mostramos el número de registros de la tabla -->
    <h2>El número de registros de esta tabla es: <?=$numFilas?></h2>

    <a href="formulario_agregar_proyecto.php">
    <button id="insertar">Insertar</button>
    </a>

    <!-- Creamos la tabla -->
    <table>
        <thead>
            <tr>
                <th>ID Proyecto</th> <!-- Mostramos el ID -->
                <th>Título</th> <!-- Mostramos el titulo -->
                <th>Descripción</th> <!-- Mostramos la descripción -->
                <th>Período</th> <!-- Mostramos el período -->
                <th>Curso</th> <!-- Mostramos el curso -->
                <th>Fecha de presentación</th> <!-- Mostramos la fecha de presentación -->
                <th>Nota</th> <!-- Mostramos la nota -->
                <th>Logotipo</th> <!-- Mostramos el logotipo -->
                <th>PDF</th> <!-- Mostramos el PDF -->
                <th>Modificar</th> <!-- Mostramos el botón de modificar -->
                <th>Borrar</th> <!-- Mostramos el botón de borrar -->
            </tr>
        </thead>
        <tbody>

            <?php

            // Si hay datos en el array asociativo, los mostramos
            if($numFilas > 0){
                while($fila = $sentencia -> fetch()) {
                    echo "<tr>";
                    echo "<td>" . ($proyecto['id_proyecto']) . "</td>";
                    echo "<td>" . ($proyecto['titulo']) . "</td>";
                    echo "<td>" . ($proyecto['descripcion']) . "</td>";
                    echo "<td>" . ($proyecto['periodo']) . "</td>";
                    echo "<td>" . ($proyecto['curso']) . "</td>";
                    echo "<td>" . ($proyecto['fecha_presentacion']) . "</td>";
                    echo "<td>" . ($proyecto['nota']) . "</td>";
                    echo "<td>" . ($proyecto['logotipo']) . "</td>";
                    echo "<td>" . ($proyecto['pdf']) . "</td>";

                    // Botón de modificar
                    echo "<td><a href='formulario_modificar_proyecto.php?id_proyecto=" . $fila['id_proyecto'] . "' class='btn-modificar'>Modificar</td>";

                    // Botón de eliminar
                    echo "<td><a href='../controlador/eliminar_alumno.php?id_proyecto=" . $fila['id_proyecto'] . "' class='btn-eliminar'>Eliminar</td>";
                    echo "</tr>";
                }
                
            } else {

                // Si no hay registros, mostramos un mensaje
                echo "<tr><td colspan='4'>No hay registros disponibles.</td></tr>";
            }

            ?>

        </tbody>
    </table>

    <!-- Botón para agregar un registro -->
    <br><a href='formulario_agregar_proyecto.php?id_proyecto=<?php echo $fila['id_proyecto']; ?>' class="btn-agregar">Agregar</a>

    <?php

    } catch (PDOException $e) {
        echo $e -> getMessage();
    }

    // Incluimos el pie de página
    include("pie.php");

    ?>