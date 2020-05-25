<?php

// Empieza aquí a escribir tu código PHP...

$palabra=$_POST["palabra"];
$palabra=strtolower($palabra);
$fichero=$_FILES["fichero"];  //esto es un array en el cual la ruta se encuantra viendolo con print_r

//print_r($fichero);
//echo "$palabra";

$ruta=$fichero["tmp_name"];   
//echo $ruta;


$lectura=file_get_contents($ruta);  //es una cadena, NO un array
$lectura=strtolower($lectura);
//echo $lectura;
$resultado=substr_count($lectura,$palabra);
echo "La palabra $palabra se encuentra $resultado veces en el archivo seleccionado";




