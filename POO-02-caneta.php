<?php
Class Caneta{
    //5 atributos

    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    //3 metodos 

    public function rabiscar() {
        if($this->tampada== true){
        echo("Não posso rabiscar");
    }
        else{
            echo("Rabiscando...");
        }
    }

  public function tampar() {
        $this->tampada = true;
    }
    public function destampar(){
        $this->tampada = false;
    }
}


?>