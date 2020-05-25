

<?php
require_once "capitulo.php";
require_once "temporada.php";


/*$juego_de_tronos=new Serie("juego de tronos");
$juego_de_tronos->setGenero("fantasia");

$temporada1got=new Temporada();
$temporada1got->setAño(2005);

$capitulo11=new Capitulo();
$capitulo11->setValoracion(8);
$capitulo11->setDuracion(90);

$temporada1got->addCapitulo($capitulo11);



$temporada2got=new Temporada();

$juego_de_tronos->addTemporada($capitulo11)




$castillo=new Serie("El hombre en el catillo");
$castillo=setGenero("historico")*/
$temporada1=new Temporada;

$miCap1=new Capitulo;
$miCap1->setTitulo("lo bueno");
$miCap1->setfechaEstreno("1/1/2010");
$miCap1->setvaloracion(6);
$miCap1->setnumCapitulo(1);
$miCap1->setduracion(45);

$temporada1->annadirCap($miCap1);

echo ($temporada1->getmatriz());
