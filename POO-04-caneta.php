<?php

Class Caneta{
    private $modelo;
    Private $cor;

    public function __construct($m, $c){
        $this->modelo = $m;
        $this->cor = $c;
        $this-> tampar();
    }
        public function tampar(){
        $this->tampada = true;
    }

}



?>