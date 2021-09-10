<?php
require_once "Animal.php";
Class Peixe extends Animal{
    Private $CorEscamas;

    public function locomover(){
        echo("Nadando");
    }
    
    public function alimentar(){
        echo("comendo comida da agua");
    }
    public function emitirSom(){
        echo("Nao faz som");
    }
    public function Soltarbolha(){
        echo("Soltando bolhas");
    }
    
    public function setCorEscamas($CorEscamas){
        $this->CorEscamas = $CorEscamas;
    } 
    public function getCorEscamas(){
        return $this->CorEscamas;
    }
}



class PeixeDourado extends Peixe{
    
}


