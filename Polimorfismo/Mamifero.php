<?php
require_once "Animal.php";

Class Mamifero extends Animal{
    Private $CorPelo;

    public function locomover(){
        echo("Correndo");
    }
    
    public function alimentar(){
        echo("Mamando");
    }
    public function emitirSom(){
        echo("Emitindo som!!!");
    }
    
    public function setCorPelo($CorPelo){
        $this->CorPelo = $CorPelo;
    } 
    public function getCorPelo(){
        return $this->CorPelo;
    } 
} 

class Canguru extends Mamifero{
    public function UsarBolsa(){
        echo("Colocou o filhote na bolsa");
    }
    public function locomover(){
        echo("Saltando");
    }
}


class Cachorro extends Mamifero{
    public function EnterraOsso(){
        echo("Enterrou o osso");
    }
    public function AbanarRabo(){
        echo("Abanou o rabo");
    }
}