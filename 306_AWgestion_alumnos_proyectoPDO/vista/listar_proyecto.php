<?php

    // Declaramos el titulo y la hoja de estilos a usar
    $titulo = "Listar Proyecto";
    $estilo = "css/estiloListar.css";

    // Incluimos el encabezado y la conexión
    include("encabezado.php");
    include("../config/conexion.php");

    // Creamos la conexión
    $conexion = conexion();

?>

<h1>Listado de Proyectos</h1>

    <!-- Try-catch -->
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
    <h2>El número de registros de esta tabla es: <?= $numFilas ?></h2>

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
                <th>Eliminar</th> <!-- Mostramos el botón de borrar -->
            </tr>
        </thead>
        <tbody>

            <?php

            // Si hay datos en el array asociativo, los mostramos
            if($numFilas > 0){
                while($proyecto = $sentencia -> fetch()) {
                    echo "<tr>";
                    echo "<td>" . $proyecto -> id_proyecto . "</td>";
                    echo "<td>" . $proyecto -> titulo . "</td>";
                    echo "<td>" . $proyecto -> descripcion . "</td>";
                    echo "<td>" . $proyecto -> periodo . "</td>";
                    echo "<td>" . $proyecto -> curso . "</td>";
                    echo "<td>" . $proyecto -> fecha_presentacion . "</td>";
                    echo "<td>" . $proyecto -> nota . "</td>";

                    // Mostramos el logotipo como una imagen
                    if(!empty($proyecto -> logotipo)){

                        // Pasamos a base64
                        $imagenBase64 = base64_encode($proyecto -> logotipo);

                        // Mostramos el logotipo
                        echo "<td><img src='data:image/jpeg;base64,$imagenBase64' alt='Logotipo' width='100'></td>";

                    } else {
                        echo "<td>Sin logotipo</td>";
                    }

                    // Mostramos el PDF (si existe)
                    if(!empty($proyecto -> pdf_proyecto)) {
                        
                        // Pasamos el PDF a base64
                        $pdfBase64 = base64_encode($proyecto -> pdf_proyecto);

                        // Mostramos un enlace para ver o descargar el PDF
                        echo "<td><a href='data:application/pdf;base64,$pdfBase64' target='_blank'>Ver PDF</a></td>";

                    } else {
                        echo "<td>Sin PDF</td>";
                    }

                    // Botón de modificar
                    echo "<td><a href='formulario_modificar_proyecto.php?id_proyecto=" . $proyecto -> id_proyecto . "' class='btn-modificar'>Modificar</td>";

                    // Botón de eliminar
                    echo "<td><a href='../controlador/eliminar_alumno.php?id_proyecto=" . $proyecto -> id_proyecto . "' class='btn-eliminar'>Eliminar</td>";
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
    <br><a href='formulario_agregar_proyecto.php?id_proyecto=<?php echo $proyecto -> id_proyecto; ?>' class="btn-agregar">Agregar</a>

    <?php

    // Gestionamos la excepción
    } catch (PDOException $e) {
        echo $e -> getMessage();
    }

    // Incluimos el pie de página
    include("pie.php");

    ?>