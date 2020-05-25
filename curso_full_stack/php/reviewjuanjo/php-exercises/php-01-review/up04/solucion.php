<?php

// Empieza aquí a escribir tu código PHP...

$fichero1="juanjo.ex";
$fichero2="COSITAS.DB";

//comprobacion del fichero. Van en if separados, porque si pones else if en uno de estos, no va a comprobar los del fichero 2
if(strpos($fichero1,".exe") || strpos($fichero1,".EXE")){    //la funcion strpos comprueba si en un string hay la subcadena deseada
    echo strtoupper($fichero1);
}
elseif(strpos($fichero1,".db") || strpos($fichero1,".DB")){
    echo strtolower($fichero1);

}
else{
    echo "No se ha encontrado la extensión";
}



if(strpos($fichero2,".exe") || strpos($fichero2,".EXE")){
    echo strtoupper($fichero);
}
elseif(strpos($fichero2,".db") || strpos($fichero2,".DB")){
    echo strtolower($fichero2);

}
else{
    echo "No se ha encontrado la extensión";
}