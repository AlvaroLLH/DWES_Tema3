<?php

    // Comprueba que el fichero no pase de cierto tamaño
    $tam = $_FILES["fichero"]["size"];
    if($tam > 256 * 1024){
        echo "<br>Demasiado grande";
        return;
    }

    // Mostramos el nombre del fichero y el nombre temporal que tendrá en el servidor
    echo "Nombre del fichero: " . $_FILES["fichero"]["name"];
    echo "<br>Nombre temporal del fichero en el servidor: " . $_FILES["fichero"]["tmp_name"];  

    // Muestra también la información del tamaño y el tipo
    $res = move_uploaded_file($_FILES["fichero"]["tmp_name"],"subidos/" . $_FILES["fichero"]["name"]);

    // Comprobamos si el archivo se ha subido correctamente o ha ocurrido un error
    if($res){
        echo "<br>Fichero guardado";
    } else {
        echo "<br>Error";
    }

?>