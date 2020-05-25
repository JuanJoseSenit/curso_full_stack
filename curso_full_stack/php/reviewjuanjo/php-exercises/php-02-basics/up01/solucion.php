<?php

// Empieza aquí a escribir tu código PHP...

mkdir("fichero_creado");

$lectura=file_get_contents("loremp-ipsum.txt");
echo $lectura;
file_put_contents("fichero_creado/loremp-ipsum2.txt",$lectura."Juanjo");

//copy("loremp-ipsum.txt","fichero_creado/loremp-ipsum.txt");

