<?php

class Temporada{
    protected $numTemporada;
    protected $annoTemporada;
    protected $matrizCapitulos;

    public function __construct()
    {
        $this->numTemporada=0;
        $this->annoTemporada=0;
        $this->matrizCapitulos=[];
    }

    function annadirCap($capitulo){
        array_push($this->matrizCapitulos,$capitulo);
    }

    public function getmatriz(){
        return $this->matrizCapitulos;
    }


}