
<?php

require_once 'Poligono.php';
class Circulo extends Poligono{
    protected $radio;

    public function __construct($radio){
        $this->radio=$radio; 
    }
        
    public function CalcularArea(){
        return round(pi()*$this->radio**2,2);
    }
}