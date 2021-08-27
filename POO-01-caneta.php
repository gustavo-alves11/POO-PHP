<?php
Class Caneta{
    //5 atributos

    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;

    //3 metodos 

    function rabiscar() {
        if($this->tampada== true){
        echo("Não posso rabiscar");
    }
        else{
            echo("Rabiscando...");
        }
    }

    function tampar() {
        $this->tampada = true;
    }
    function destampar(){
        $this->tampada = false;
    }
}


?>