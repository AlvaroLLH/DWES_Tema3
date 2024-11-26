<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Filas y Columnas</title>
</head>
<body>

    <p>
    Crear un formulario en HTML que solicite al usuario el número de filas y columnas.
    Utilizando PHP, generar una tabla donde cada celda contenga un número aleatorio entre 1 y 100.
    </p>

    <h1>Generar tabla dinámica</h1>
    <form action="ejercicio1.php" method="post">

            <label for="filas">Número de filas:</label>
            <input type="number" id="filas" name="filas" min="1" required><br><br>

            <label for="columnas">Número de columnas:</label>
            <input type="number" id="columnas" name="columnas" min="1" required><br><br>

            <input type="submit" value="Generar tabla"><br><br>
    </form>

    <?php

    /*
    Crear un formulario en HTML que solicite al usuario el número de filas y columnas.
    Utilizando PHP, generar una tabla donde cada celda contenga un número aleatorio entre 1 y 100.
    */

    // Declaración de variables
    $filas;
    $columnas;
    $numero;

    // Comprobamos si se han recibido valores en el formulario
    if(isset($_POST['filas']) && isset($_POST['columnas'])){

        // Si hay valores, los guardamos en las variables
        $filas = (int)$_POST['filas'];
        $columnas = (int)$_POST['columnas'];

        // Creamos la tabla
        echo '<table border = "1" style = "width:15%; text-align: center">';

        // Creamos las filas
        for ($i = 1; $i <= $filas; $i++) {
        
            echo "<tr>";

        // Creamos las columnas
        for ($j = 1; $j <= $columnas; $j++) { 
            
            // Generamos un número entre 1 y 100 y lo metemos
            $numero = rand(1,100);
            echo "<td>" . $numero ."</td>";

            }

            echo "</tr>";

        }
        
        echo "</table>"; // Cerramos la tabla

        // Mensaje por si no se han introducido valores
    } else {
        echo "Por favor, ingrese un número de filas y de columnas";
    }

    ?>
    
</body>
</html>