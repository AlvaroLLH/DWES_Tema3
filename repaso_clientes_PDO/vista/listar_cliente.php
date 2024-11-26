<?php

    // Declaramos el título y la hoja de estilos
    $titulo = "Listar Cliente";
    $estilo = "../vista/css/estiloFormulario.css";

    // Incluimos el encabezado y la conexión
    include("encabezado.php");
    include("../config/conexion.php");

    // Creamos la conexión
    $conexion = conexion(); 

?>

<h1>Listado de Clientes</h1>

    <?php

    // Try-catch
    try {

        // Creamos la consulta
        $sql = "SELECT * FROM cliente";

        // Preparamos la consulta
        $sentencia = $conexion->prepare($sql);

        // Guardamos las filas como objetos
        $sentencia->setFetchMode(PDO::FETCH_OBJ);

        // Ejecutamos la consulta
        $sentencia->execute();

        // Guardamos el número de filas
        $numFilas = $sentencia->rowCount();

    ?>

    <!-- Mostramos el número de registros de la tabla -->
    <h2>El número de registros de esta tabla es: <?= $numFilas ?></h2>

    <!-- Creamos la tabla -->
    <table>
        <thead>
            <tr>
                <th>ID Cliente</th> <!-- Columna para el ID -->
                <th>Nombre</th> <!-- Columna para el nombre -->
                <th>Apellido</th> <!-- Columna para el apellido -->
                <th>Email</th> <!-- Columna para el email -->
                <th>Teléfono</th> <!-- Columna para el teléfono -->
                <th>Dirección</th> <!-- Columna para el dirección -->
                <th>Fecha de Registro</th> <!-- Columna para la fecha de registro -->
            </tr>
        </thead>
        <tbody>

            <?php

            // Mostramos los objetos
            if($numFilas > 0) {
                while($cliente = $sentencia->fetch()) {

                    echo "<tr>";
                    echo "<td>" . $cliente->id_cliente . "</td>";
                    echo "<td>" . $cliente->nombre . "</td>";
                    echo "<td>" . $cliente->apellido . "</td>";
                    echo "<td>" . $cliente->email . "</td>";
                    echo "<td>" . $cliente->telefono . "</td>";
                    echo "<td>" . $cliente->direccion . "</td>";
                    echo "<td>" . $cliente->fecha_registro . "</td>";

                    // Botón de modificar
                    echo "<td><a href='formulario_modificar_cliente.php?id_cliente=" . $cliente->id_cliente . "' class='btn-modificar'>Modificar</td>";

                    // Botón de eliminar
                    echo "<td><a href='../controlador/eliminar_cliente.php?id_cliente=" . $cliente->id_cliente . "' class='btn-eliminar'>Eliminar</td>";
                    echo "</tr>";

                }

            } else {

                // Si no hay registros para mostrar, sale un mensaje por pantalla
                echo "<tr><td colspan='4'>No hay registros disponibles</td></tr>";

            }

            ?>

        </tbody>
    </table>

    <!-- Botón para agregar un cliente -->
    <br><a href='formulario_agregar_cliente.php?id_cliente=<?php echo $proyecto->id_cliente; ?>' class = "btn-agregar">Agregar</a>

    <?php

    // Gestionamos la excepción
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    // Incluimos el pie de página
    include("pie.php");

    ?>