<?php
Abstract Class Animal{
    private $Peso;
    private $Idade;
    private $Membros;

    Abstract function locomover();
    Abstract function alimentar();
    Abstract function emitirSom();

    public function setpeso($peso){
        $this->Peso = $peso;
    }
    
    public function setidade($idade){
        $this->Idade = $idade;
    } 
    
    public function setMenbros($Menbros){
        $this->Menbros = $Menbros;
    } 
    public function getpeso(){
        return $this->Peso;
    } 
    public function getIdade(){
        return $this->Idade;
    } 
    public function getMenbros(){
        return $this->Menbros;
    } 
}
