<?php

// Empieza aquí a escribir tu código PHP...


function calcular_factorial($numero){
$resultado=1;
for($i=$numero;$i>=1;$i--){
    $resultado=$resultado*$i;
}
return $resultado;
};

$numero=5;
$factorial=calcular_factorial($numero);
echo "El factorial de $numero es $factorial";

