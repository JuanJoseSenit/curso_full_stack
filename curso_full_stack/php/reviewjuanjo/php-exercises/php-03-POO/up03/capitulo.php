<?php


class Capitulo{

    protected $titulo;
    protected $fechaEstreno;
    protected $valoracion;
    protected $numCapitulo;
    protected $duracion;

    public function __construct()
    {
        $this->titulo="";
        $this->fechaEstreno="";
        $this->valoracion=0;
        $this->numCapitulo=0;
        $this->duracion=0;
    }
    public function setTitulo($titulo){
        $this->titulo=$titulo;
    }
    public function setfechaEstreno($fechaEstreno){
        $this->titulo=$fechaEstreno;
    }
    public function setvaloracion($valoracion){
        $this->titulo=$valoracion;
    }
    public function setnumCapitulo($numCapitulo){
        $this->titulo=$numCapitulo;
    }
    public function setduracion($duracion){
        $this->titulo=$duracion;
    }
    


}