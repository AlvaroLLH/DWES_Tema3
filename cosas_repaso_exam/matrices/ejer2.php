    <?php

    /*
    Recorrer un array asociativo multidimensional con foreach

    Crea un array y usa un bucle foreach para recorrer el array y mostrar cada producto en este formato:
    Producto: Laptop | Precio: 1200 | Stock: 10
    */

    // Declaración de variables
    $productos = array(
        array("Nombre" => "Laptop", "Precio" => 1200, "Stock" => 10),
        array("Nombre" => "Mouse", "Precio" => 25, "Stock" => 50),
        array("Nombre" => "Monitor", "Precio" => 300, "Stock" => 5)
    );

    // Prueba: Mostramos el stock del producto "Mouse"
    //echo "El stock del Mouse es: " . $productos[1]["Stock"];

    // Usamos un bucle foreach para mostrar los productos del array
    foreach ($productos as $producto) {
        echo "Producto: " . $producto["Nombre"] . " | ";
        echo "Precio: " . $producto["Precio"] . " | ";
        echo "Stock: " . $producto["Stock"] . "<br>";
    }

    ?>