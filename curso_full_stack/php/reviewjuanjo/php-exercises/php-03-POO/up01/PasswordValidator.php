<?php
class PasswordValidator{
    var $contraseña;
    function __construct($contraseña){
        $this->contraseña=$contraseña;
        
    }

    function isValid(){
        
        $validacion_caracter=false;
        for($i=0;$i<strlen($this->contraseña);$i++){
            if($this->contraseña[$i]==="."||$this->contraseña[$i]===","||$this->contraseña[$i]==="-"||$this->contraseña[$i]==="_"||$this->contraseña[$i]===";"){
                $validacion_caracter=true;
            }
        }
        if(strlen($this->contraseña)<8 || $validacion_caracter===false){
            echo "La contraseña no es correcta";
        }
        else{
            echo "Contraseña correcta";
        }
        


    }




}


?>