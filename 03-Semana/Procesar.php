<?php

$producto = (isset($_POST["producto"])) ? $_POST["producto"] : 0;
$cantidad = (isset($_POST["cantidad"])) ? $_POST["cantidad"] : 0;
$precio = (isset($_POST["precio"])) ? $_POST["precio"] : 0;

// Validacion de entrada de datos
if ($producto == 0 || $cantidad == 0 || $precio == 0):
    echo "<h1>FALTAN DATOS POR INGRRESAR</h1>";

else:

    $nombreProducto = "";

    switch ($producto) {
        case 1:
            $nombreProducto = "Manzana";
            break;
        case 2:
            $nombreProducto = "Uva";
            break;
        case 3:
            $nombreProducto = "Pera";
            break;
        case 4:
            $nombreProducto = "Naranja";
            break;
        case 5:
            $nombreProducto = "Cebolla";
            break;
        case 6:
            $nombreProducto = "Zanahoria";
            break;
        case 7:
            $nombreProducto = "Pepino";
            break;
        case 8:
            $nombreProducto = "Berengena";
            break;
        case 9:
            $nombreProducto = "Piña";
            break;

    }

    $IVA = 0.13;
    $subTotal = ($precio * $cantidad) * $IVA;
    $sub = $precio * $cantidad;
    $totalPagar = $subTotal + ($precio * $cantidad);

    $impresion = <<<INI
    <p>
    Nombre del producto : $nombreProducto
    <br>
    Cantidad del producto : $cantidad
    <br>
    Precio del producto : $precio
    <br>
    Sub Total $sub
    <br>
    Calculo de IVA $ $subTotal
    <br>
    Total a Pagar $ $totalPagar
    </p>
    INI;

    echo $impresion;

endif;

?>