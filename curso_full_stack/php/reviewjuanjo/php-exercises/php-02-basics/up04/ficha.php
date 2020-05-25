<?php

if(!isset($_COOKIE['cesta-compra'])) {
    header("Location: solucion.php");
    exit();
}

$cookie_data = $_COOKIE['cesta-compra'];

var_dump($cookie_data);

$basket = json_decode($cookie_data, true);

var_dump($basket);

echo "<h1>Usuario ".$basket['idUsuario']."</h1>";


echo "<h3>Cesta...</h3>";
echo "<ul>";
foreach ($basket['items'] as $producto => $cantidad) {
    echo "<li>".$producto.": ".$cantidad."</li>";
}
echo "</ul>";