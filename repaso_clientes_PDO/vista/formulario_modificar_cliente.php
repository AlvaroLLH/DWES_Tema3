<?php

    // Declaramos el título y la hoja de estilos
    $titulo = "Actualizar Cliente";
    $estilo = "css/estiloFormulario.css";

    // Incluimos el encabezado y la conexión
    include("encabezado.php");
    include("../config/conexion.php");

?>

<!-- Mostramos el título -->
<h1><?= $titulo ?></h1>

<!-- Enlazamos la hoja de estilos -->

<?php

    // Creamos la conexión
    $conexion = conexion();

    // Pedimos el ID por URL
    $id_cliente = $_GET['id_cliente'];

    // Try-catch
    try {

        // Creamos la consulta
        $sql = "SELECT * FROM cliente WHERE id_cliente = :id_cliente";

        // Preparamos la consulta
        $sentencia = $conexion->prepare($sql);

        // Asignamos el valor al parámetro
        $sentencia->bindParam(":id_cliente", $id_cliente, PDO::PARAM_INT);

        // Ejecutamos la consulta
        $sentencia->execute();

        // Guardamos los datos del registro en un array asociativo
        $cliente = $sentencia->fetch(PDO::FETCH_ASSOC);

        // Si no se encuentra ningún cliente con ese ID, mensaje de error
        if(!$cliente) {
            exit("No se ha encontrado ningún cliente con ese ID");
        }

        // Gestionamos la excepción
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

?>

<!-- Creamos el formulario para modificar el cliente -->
<form action="../controlador/modificar_cliente.php" method="POST">

    <!-- Campo oculto para el ID -->
    <input type="hidden" name="id_cliente" value="<?= $cliente['id_cliente'] ?>">

    <!-- Campo para el nombre -->
    <label for="nombre">
        <p>Nombre:</p>
        <input type="text" name="nombre" value="<?= $cliente['nombre'] ?>" required>
    </label>

    <!-- Campo para el apellido -->
    <label for="apellido">
        <p>Apellido:</p>
        <input type="text" name="apellido" value="<?= $cliente['apellido'] ?>" required>
    </label>

    <!-- Campo para el email -->
    <label for="email">
        <p>Email:</p>
        <input type="email" name="email" value="<?= $cliente['email'] ?>" required>
    </label>

    <!-- Campo para el telefono -->
    <label for="telefono">
        <p>Teléfono:</p>
        <input type="tel" name="telefono" value="<?= $cliente['telefono'] ?>" required>
    </label>

    <!-- Campo para la direccion -->
    <label for="direccion">
        <p>Dirección:</p>
        <input type="text" name="direccion" value="<?= $cliente['direccion'] ?>" required>
    </label>

    <!-- Campo para la fecha de registro -->
    <label for="fecha_registro">
        <p>Fecha de registro:</p>
        <input type="date" name="fecha_registro" value="<?= $cliente['fecha_registro'] ?>" required>
    </label>

    <!-- Botón de envío -->
    <label for="enviar">
        <p><input type="submit" value="Actualizar"></p>
    </label>

</form>

<?php

// Desconectamos
$conexion = null;

?>