<?php

require_once 'Poligono.php';
class Rectangulo extends Poligono{ 
    protected $base;
    protected $altura;
    public function __construct($base,$altura){
        $this->base=$base; 
        $this->altura=$altura;
    }
    public function CalcularArea(){
        return $this->base*$this->altura;
    }
}