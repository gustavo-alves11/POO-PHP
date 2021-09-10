<?php
require_once 'POO-inter-F1.php';
class Piloto implements Controlador {
    private $nome;
    private $idade;
    private $vitorias;
    private $podium;
    private $equipe;
    private $companheiro;

    function __construct($no, $id, $vi, $pod, $eq, $comp){
        $this->setnome($no);
        $this->setidade($id);
        $this->setvitorias($vi);
        $this->setpodium($pod);
        $this->setequipe($eq);
        $this->setcompanheiro($comp);

    }    
    public function vencercorrida(){
        $this->setvitorias($this->getvitorias()+1);
    }
    public function ganharpodium(){
        $this->setpodium($this->getpodium()+1);
    }
    public function apresentar(){
        echo "<br>Piloto: ".$this->getnome();
        echo "<br>idade: ".$this->getidade();
        echo "<br>vitorias: ".$this->getvitorias();
        echo "<br>podiums: ".$this->getpodium();
        echo "<br>equipe: ".$this->getequipe();
    }

    private function setnome($no){
        $this->nome = $no;        
    }
    private function setidade($id){
        $this->idade = $id;
    }
    private function setvitorias($vi){
        $this->vitorias = $vi;
    }
    private function setpodium($pod){
        $this->podium = $pod;
    }
    private function setequipe($eq){
        $this->equipe = $eq;
    } 
    private function setcompanheiro($comp){
        $this->companheiro = $comp;
    }
     function getnome(){
        return $this->nome;
    }
    private function getidade(){
        return $this->idade;
    }
    private function getvitorias(){
        return $this->vitorias;
    }
     function getpodium(){
        return $this->podium;
    }
    private function getequipe(){
        return $this->equipe;
    }
    private function getcompanheiro(){
        return $this->companheiro;
    }

}   
// segunda classe
class Corrida{

    private $piloto1;
    private $piloto2;
    private $piloto3;
    private $piloto4;
    private $voltas;
    private $pais; 

function iniciarcorrida($P1, $P2, $P3, $P4){
    $this->setpiloto1($P1->getnome());// dessa forma apenas o nome do piloto é retirado da outra classe
    $this->setpiloto2($P2);// diferente desse onde todas as informaçoes sao mostradas
    $this->setpiloto3($P3);
    $this->setpiloto4($P4);
    if($P1->getpodium()>=150){//estava com problemas para chamar essa funçao pq os metodos getters estam privados
        echo("é o lewis");    //funçao apenas para testar o ralacionamento entre as classes.
    }
    else{echo(" não é");}
}
function vencedordacorrida(){

}

 function setpiloto1 ($p1){
    $this->piloto1 = $p1;
}
 function setpiloto2($p2){
    $this->piloto2 = $p2;
}
function setpiloto3($p3){
    $this->piloto3 = $p3;
}
function setpiloto4($p4){
   $this->piloto4 = $p4;
}
 function setvoltas($voltas){
    $this->voltas = $voltas;
} 
 function setpais($pais){
    $this->pais = $pais;
}
 function getp1(){
    return $this->piloto1;
}
 function getp2(){
    return $this->piloto2;
}
 function getvoltas(){
    return $this->voltas;
}
 function getpais(){
    return $this->pais;
}
}
?>