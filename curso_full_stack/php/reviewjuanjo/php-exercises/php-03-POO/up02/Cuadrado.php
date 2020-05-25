<?php


/*class Cuadrado{
    var $lado;
    function __construct($lado){
        $this->lado=$lado; 
    }
    function CalcularArea(){
        return $this->lado**2;
    }
}*/

class Cuadrado{

    var $lado;
    var $area;
    function __construct($lado){
        $this->lado=$lado; 
        // se podria poner aqui: $this->area = $this->lado**2    ò   $this->CalcularArea();
        
    }

    function CalcularArea(){

        $this->area=$this->lado**2;
    }
     function getArea(){

        return $this->area;

     }

}