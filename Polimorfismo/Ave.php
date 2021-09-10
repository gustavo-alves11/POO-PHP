<?php
require_once "Animal.php";
Class Ave extends Animal{
    Private $CorPenas;

    public function locomover(){
        echo("voando");
    }
    
    public function alimentar(){
        echo("comendo com o bico");
    }
    public function emitirSom(){
        echo("Emitindo som  de ave!!!");
    }
    public function FazerNinho(){
        echo("fazendo ninho!");
    }
        
    public function setCorPenas($CorPenas){
        $this->CorPenas = $CorPenas;
    } 
    public function getCorPenas(){
        return $this->CorPenas;
    }
}

class Arara extends Ave{
    
}

?>
