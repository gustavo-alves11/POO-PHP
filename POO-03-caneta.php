<?php
Class Caneta{
    //atributos privados

    private $modelo;
    private $cor;
    private $ponta;
    private $tampada;
//METODO CONTRUTOR 

   public function __construct(){
       $this-> modelo = "bic";
       $this-> cor = "Vermelha";
       $this-> tampar();
   }
//função para tampar a caneta   
    public function tampar(){
    $this->tampada = true;
}

    // metodos Especiais para atribuir e pegar dados privados
     function getModelo(){
        return $this->modelo;
    }
    function setModelo($m){
        $this->modelo = $m;
    }
    function getCor(){
        return $this->cor;
    }
    function setCor($c){
        $this->cor = $c;
    }

}


?>