<?php

// Empieza aquí a escribir tu código PHP...

$numero=6;
$n=1;
if($numero>=10000){
    echo "$numero elevado a $n sobrepasa 10000";
}
while($numero<10000){

    $probar=$numero**$n;

    if($probar>10000){
        echo "$numero elevado a $n sobrepasa 10000";
        $numero=$probar;
    }
    else{
        $n=$n+1;
    }
}

