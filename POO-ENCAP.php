<?php
require_once 'POO-inter.php';
Class ControleRemoto implements Controlador{
    //atributo
    private $volume;
    private $ligado;
    private $tocando;

    function __construct(){
        $this->setvolume(50);
        $this->setligado(false);
        $this->settocando(false);
    }
    public function ligar(){
        $this->setligado(true);
        
    }
     public function desliga(){
        $this->setligar(true);
    }
     public function abrirMenu(){
        echo "<br>Está ligado?: ". ($this->getligado()?"Sim":"Não");
        echo "<br>Volume: ".$this->getvolume();
        echo "<br>Está tocando?: ". ($this->gettocando()?"Sim":"Não");
        }
    
     public function fecharMenu(){
        Echo("Fechando menu...");
    }
     public function maisVolume(){
        if($this->getligado()){
            $this->setvolume($this->getvolume() + 5);
        }
        else{echo("Volume maximo");}
    }
     public function menosVolume(){
        if($this->getligado() && $this->getvolume()>=5){
            $this->setvolume(getvolume()-5);
        }
        else{echo("Volume minimo");}
    }
    
     public function ligarMudo(){
        if($this->getligado() && $this->getvolume()>0){
            $this->setvolume(0);
        }
        else{echo("Volume minimo");}
    }
     public function desligarMudo(){
        if($this->getligado() && $this->getvolume()==0){
            $this->setvolume(50);
        }
        else{echo("Mudo ativado");}
    }
     public function play(){
        if($this->getligado() && !$this->gettocando()){
            $this->settocando(true);
        }
        else{echo("Já está tocando");}
        }
     public function pause(){
        if($this->getligado() && $this->gettocando()){
            $this->settocando(false);
        }
        else{echo("Já está pausado");}
        }
    // Metodos get e set
    private function getligado(){
        return $this->ligado;
    }
    private function getvolume(){
        return $this->volume;
    }
    private function gettocando(){
        return $this->tocando;
    }
    private function setligado($ligar){
        $this->ligado = $ligar;
    }
    private function setvolume($volume){
        $this->volume = $volume;
    }
    private function settocando($tocando){
        $this->tocando = $tocando;
    }
    
}

?>