<?php

$basket = [
    'idUsuario' => '34234912',
    'items'     => [
        'Pixel 3' => 1,
        'Adaptador usb' => 2,
    ],
];

$duracion = 60 * 60;

setcookie(
    "cesta-compra",
    json_encode($basket),
    date("U") + $duracion,
    "/",
    "",
    false,
    true
);

