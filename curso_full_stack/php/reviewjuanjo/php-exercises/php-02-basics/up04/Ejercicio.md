Enunciado:

Guardad la información de la cesta de la compra de un usuario
en una cookie que se llame basket, que caduque al pasar 1hora,
que no pueda ser leída por javascript y sólo se envíe si
estamos por https.

<?php

$basket = [
    'idUsuario' => '34234912',
    'items' => [
        'Pixel 3' => 1,
        'Adaptador usb' => 2
    ]
];

setcookie(/* ¿qué parámetros son necesarios? */);

?>

Xtra: hacer que la cookie pueda navegar por http y
leer y mostrar su contenido en PHP