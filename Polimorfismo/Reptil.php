<?php
require_once "Animal.php";
Class Reptil extends Animal{
    Private $CorEscamas;

    public function locomover(){
        echo("Rastejando");
    }
    
    public function alimentar(){
        echo("comendo");
    }
    public function emitirSom(){
        echo("Emitindo som  de reptil!!!");
    }
    
    public function setCorEscamas($CorEscamas){
        $this->CorEscamas = $CorEscamas;
    } 
    public function getCorEscamas(){
        return $this->CorEscamas;
    }
}
class Tartaruga extends Reptil{
    public function locomover(){
        echo("Andando devagar!");
    }
}
class Cobra extends Reptil{
    
}
