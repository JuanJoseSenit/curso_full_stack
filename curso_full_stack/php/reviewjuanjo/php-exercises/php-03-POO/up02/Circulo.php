<?php


class Circulo{
    var $radio;

    function __construct($radio){
        $this->radio=$radio; 
    }
        
    function CalcularArea(){
        return round(pi()*$this->radio**2,2);
    }
}