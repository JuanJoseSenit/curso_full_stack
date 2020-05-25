<?php

// Empieza aquí a escribir tu código PHP...
$lado=4;
$asterisco="* ";

for($i = 1; $i <= $lado; $i++){ 
    for ($j = 1; $j<= $lado - $i; $j++) { 
        echo "&nbsp";
    }
    for($j = 1; $j <=$i; $j++) {
        echo $asterisco;
    }
    echo "<br>";


}