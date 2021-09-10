<?php
Class banco{
    public $numconta;
    protected $tipo;
    private $dono;
    private $saldo;
    Private $status;

    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
        $this->tipo="CC";

    }
    //usando setsaldo
    public function AbrirConta(){
        $this->status= true;
        if($this->tipo == "CC"){
            $this->setsaldo=50;
        }
        else if($this->tipo == "CP")
        {
            $this->setSaldo=150;
        }
        else{
            echo("Escolha um tipo de conta ")
        }
    }
    public function FecharConta(){
        
        if($this->saldo==0){
            $this->status= false;
        }
        else{
            echo("Ainda existe saldo!!!");
        }
    }
    public function Depositar(){
        //pode ser usado o metodo get tambem 
        if($this->getstatus()){
            
            Echo("Deposito feito!");
        }
        else{
            echo("Conta fechada!");
        }
    }
    public function Sacar(){
        if($this->getSaldo()>0){
            echo("Saque efetuado com sucesso!");
        }
    }
    public function PagarMensalidade(){
        if($this->getSaldo()){
            if($this->tipo == "cc"){
                Echo("pague 50 reais");
            }
            else{
                Echo("Paque 150 reais");
            }
        }
        else{
            echo("Não é nescessario o pagamento conta fechada");
        }
    }  
    
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getDono(){
        return $this->dono;
    }
    public function setDono($d){
        $this->dono = $d; 
    }
    public function getSaldo(){
        return $this->saldo;
    }    
    public function setSaldo($saldo){
        $this->saldo = $saldo; 
    }
    public function getStatus(){
        return $this->status;
    }
    public function setStatus($status){
        $this->saldo= $status; 
    }

    


}


?>