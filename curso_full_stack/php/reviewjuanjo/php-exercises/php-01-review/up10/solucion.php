<?php

// Empieza aquí a escribir tu código PHP...

$array=[2,5,10,23];


function sumar_array($array){
    $resultado=0;
    
    for($i=0;$i<count($array);$i++){
        $resultado= $resultado + $array[$i];

    }
    return $resultado;

}




$suma=sumar_array($array);
echo $suma;