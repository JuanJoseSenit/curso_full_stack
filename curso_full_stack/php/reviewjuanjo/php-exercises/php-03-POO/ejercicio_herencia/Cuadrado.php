<?php

require_once 'Poligono.php';
class Cuadrado extends Poligono{
    protected $lado;
    public function __construct(int $lado){   //con el int intenta convertir si puede un string en un numero ej "5"->5
        $this->lado=$lado; 
    }
    public function CalcularArea(){
        return $this->lado**2;
    }
}