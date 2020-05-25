<?php

$cadenas = ["patata", "cebolla", "sal", "pimienta", "te", "agua"];

// Continua...

//mas larga
$a=0;
$index=0;
for($i=0;$i<count($cadenas);$i++){
    
    
    if(strlen($cadenas[$i])>$a){
        
        $a=strlen($cadenas[$i]);
        $index = $i;//posicion del array con la cadena mas larga
    }
}

echo "La palabra más larga es $cadenas[$index]" ."<br>";


//mas corta
$b=100;
$indice=0;
for($i=0;$i<count($cadenas);$i++){
    if(strlen($cadenas[$i])<$b){
        $b=strlen($cadenas[$i]);
        $indice=$i;
    }

}

echo "La palabra más corta es $cadenas[$indice]";

