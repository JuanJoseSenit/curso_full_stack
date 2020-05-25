<?php

$colores = ['blanco', 'verde', 'rojo'];

// Empieza aquí a escribir tu código PHP...

$colores = ['blanco', 'verde', 'rojo'];
//print_r($colores);


//1er apartado

//----------recorriendo array--------------------
for($i=0;$i<count($colores);$i++){
    if($i===0){
        $primera_pregunta=$primera_pregunta . $colores[$i];
    }
    else{
        $primera_pregunta=$primera_pregunta .", ". $colores[$i];
    }
}
echo $primera_pregunta ."<br>";

//------------con funcion implode-------------------

echo implode(", ",$colores);   //separar el arrays or comas
