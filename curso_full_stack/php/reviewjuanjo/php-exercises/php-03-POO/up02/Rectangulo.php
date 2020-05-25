<?php


class Rectangulo{
    var $base;
    var $altura;
    function __construct($base,$altura){
        $this->base=$base; 
        $this->altura=$altura;
    }
    function CalcularArea(){
        return $this->base*$this->altura;
    }
}