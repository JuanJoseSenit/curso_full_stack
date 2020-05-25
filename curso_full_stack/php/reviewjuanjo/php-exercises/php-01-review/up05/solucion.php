<?php

// Empieza aquí a escribir tu código PHP...

$numero=12332.1;
$numero="$numero";
$numero=str_replace(".","",$numero);

$numero_reves="";

for($i=strlen($numero);$i>=0;$i--){
    $numero_reves=$numero_reves.$numero[$i];
}

if($numero===$numero_reves){
    echo "El número $numero es capicúa";
}
else{
    echo "El número $numero no es capicúa";
}
