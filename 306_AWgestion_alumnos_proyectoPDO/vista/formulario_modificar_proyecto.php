<?php

    // Declaramos el título y la hoja de estilos
    $titulo = "Actualizar Proyecto";
    $estilo = "css/estiloForm.css";

    // Incluimos el encabezado y la conexión
    include("encabezado.php");
    include("../config/conexion.php");

?>

<!-- Mostramos el título -->
<h1><?= $titulo ?></h1>

<?php

    // Creamos la conexión
    $conexion = conexion();

    // Pedimos el ID por URL
    $id_proyecto = $_GET['id_proyecto'];
    
    // Try-catch
    try {

        // Creamos la consulta
        $sql = "SELECT * FROM proyecto WHERE id_proyecto = ?";

        // Preparamos la consulta
        $sentencia = $conexion -> prepare($sql);

        // Atributos el valor al parámetro id_proyecto
        $sentencia -> bindParam(":id_proyecto", $id_proyecto, PDO::PARAM_INT);

        // Ejecutamos la consulta
        if($sentencia -> execute()) {

            // Guardamos los datos del registro en un array asociativo
            $proyecto = $sentencia -> fetch(PDO::FETCH_ASSOC);

            // Si no se encuentra ningún proyecto con ese ID, mensaje de error
            if(!$proyecto) {
                exit("No hay proyecto/s con ese ID");
            }
        }

        // Gestionamos la excepción
    } catch (PDOException $e) {
        echo $e -> getMessage();
    }

?>

<!-- Creamos el formulario para modificar el proyecto -->
<form action="../controlador/modificar_proyecto.php" method="POST">

    <!-- Campo oculto para el ID -->
    <label for="id_proyecto">
        <input type="hidden" name="id_proyecto" value="<?= $_GET['id_proyecto']?>">
    </label>

    <!-- Campo para el título -->
    <label for="titulo">
        <p>Título:</p><input type="text" name="titulo" value="<?= $_GET['titulo']?>" required>
    </label>

    <!-- Campo para la descripción -->
    <label for="descripcion">
        <p>Descripción:</p><input type="text" name="descripcion" value="<?= $_GET['descripcion']?>" required>
    </label>

    <!-- Campo para el período -->
    <label for="periodo">
        <p>Período:</p><input type="number" name="periodo" value="<?= $_GET['periodo']?>" required>
    </label>

    <!-- Campo para el curso -->
    <label for="curso">
        <p>Curso:</p><input type="number" name="curso" value="<?= $_GET['curso']?>" required>
    </label>

    <!-- Campo para la fecha de presentación -->
    <label for="fecha">
        <p>Fecha de presentación:</p><input type="text" name="fecha" value="<?= $_GET['fecha']?>" required>
    </label>

    <!-- Campo para la nota -->
    <label for="nota">
        <p>Nota:</p><input type="number" name="nota" value="<?= $_GET['nota']?>" required>
    </label>

    <!-- Campo para el logotipo -->
    <label for="logotipo">
        <p>Logotipo:</p><input type="image" name="logotipo" value="<?= $_GET['logotipo']?>" required>
    </label>

    <!-- Campo para el PDF -->
    <label for="pdf">
        <p>PDF:</p><input type="hidden" name="pdf" value="<?= $_GET['pdf']?>" required>
    </label>

    <!-- Botón de envío -->
    <label for="enviar">
        <p><input type="submit" value="Enviar"</p>
    </label>

</form>

<?php

    // Desconectamos
    $conexion = null;

?>