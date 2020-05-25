<?php 

function cambiarmayus($texto){
    $texto=strtoupper($texto);
    return $texto;
}
function cambiarQue($texto){
    $texto=str_replace("QUE","K",$texto);
    return $texto;
}
function igualdad($texto){
    $texto=str_replace("IGUAL","=",$texto);
    return $texto;
}
function quitarTildes($texto){
    $texto=str_replace("á","A",$texto);
    $texto=str_replace("é","E",$texto);
    $texto=str_replace("í","I",$texto);
    $texto=str_replace("ó","O",$texto);
    $texto=str_replace("ú","U",$texto);
    return $texto;
}
function cambiarGuBu($texto){
    $texto=str_replace("GU","W",$texto);
    $texto=str_replace("BU","W",$texto);
    return $texto;
}

function modificar($texto){
    $textomayus=cambiarmayus($texto);
    $texto2=cambiarQue($textomayus);
    $texto3=igualdad($texto2);
    $texto4=quitarTildes($texto3);
    $texto5=cambiarGuBu($texto4);
    echo $texto5;
}