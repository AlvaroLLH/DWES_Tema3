    <?php
    // Álvaro Llamas Huerta

    /*
    Escribe un programa que pida nombre, primer apellido, segundo apellido, DNI, email, fecha de nacimiento, teléfono, sexo,
    estudios (ESO, FP Grado Medio, Bachillerato, FP Grado Superior, Universitarios,...), idiomas, foto y currículum (se almacena
    con los nombres dni.png y dni.pdf en la carpeta datosPersonales) con el método POST. Pasa información "oculta" al enviar el
    formulario mediante un input del tipo hidden para el tamaño de ficheros. Después los mostrará por pantalla: nombre con apellidos,
    edad,...

    Establece un formato para toda esta información, una idea es que muestre el nombre en la parte superior, que el resto de datos
    estén en una tabla a la izquierda, la foto en la parte derecha de los datos, el currículum en la parte inferior.

    El ejercicio se hará separando la lógica: en el primer archivo crearemos el formulario para introducir los datos, y luego
    recogemos los datos y generamos la tabla con datos, foto y currículum en el segundo archivo
    */

    // Mostramos el nombre con los dos apellidos al principio
    echo $_POST["nombre"] . " " . $_POST["primer_apellido"] . " " . $_POST["segundo_apellido"] . "<br>";

    // Mostramos la foto debajo del nombre
    echo $_POST["foto"] . "<br>";

    // Creamos la tabla que almacenara el resto de datos a la izquierda
    echo '<table border = "1" style = "width:15%; text-align: center">';

        // Mostramos el DNI
        echo "<tr>";
            echo "<td>DNI</td>";
            echo "<td>" . $_POST["dni"] . "</td>";
        echo "</tr>";

        
        echo "<tr>";
            echo "<td>DNI</td>";
            echo "<td>" . $_POST["dni"] . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>DNI</td>";
            echo "<td>" . $_POST["dni"] . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>DNI</td>";
            echo "<td>" . $_POST["dni"] . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>DNI</td>";
            echo "<td>" . $_POST["dni"] . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>DNI</td>";
            echo "<td>" . $_POST["dni"] . "</td>";
        echo "</tr>";

        echo "<tr>";
            echo "<td>DNI</td>";
            echo "<td>" . $_POST["dni"] . "</td>";
        echo "</tr>";

    echo '</table>';

    ?>