<?php
require_once 'Interface.php';
class Pessoa{
    private $nome;
    private $idade;
    private $sexo;  
    //falta um construtor
    function __construct($n, $id, $sexo){
        $this->setnome($n);
        $this->setidade($id);
        $this->setsexo($sexo);
    }

    public function fazeraniversario(){
        $this->setidade($this->getidade()+1);

    }
        
    private function setnome($n){
        $this->nome = $n;        
    }
    private function setidade($id){
        $this->idade = $id;        
    }
    private function setsexo($sexo){
        $this->sexo = $sexo;        
    }
     function getnome(){
        return $this->nome;
    }
    private function getidade(){
        return $this->idade;
    }
    private function getsexo(){
        return $this->sexo;
    }
}
Class livro {
    private $titulo;
    private $autor;
    private $totpaginas;
    private $pagina;
    private $aberto;
    private $leitor;

    function __construct($t, $a, $total, $aberto, $leitor)
    {
        $this->settitulo($t);
        $this->setautor($a);
        $this->settotal($total);
        $this->setaberto($aberto);
        $this->setleitor($leitor->getnome());
    }
    public function abrir(){
        $this->setaberto(true);
    }
    public function fechar(){
        $this->setaberto(false);
    }
    public function folhear(){
        $pagina= rand(0, $this->gettotal());
        if($this->getaberto(true)){
        //funçao randon nao funciona acho que é pq o valor deve estar em uma variavel
            $this->setpag($pagina);
        echo ("pagina atual é: ". $this->getpag());}
        else{echo("livro fechado!!!");}   
    }

    public function avançarPag(){
        $this->setpag($this->getpag()+1);
    }
    public function voltarPag(){
        $this->setpag($this->getpag()-1);
    }




    private function settitulo($t){
        $this->titulo = $t;        
    }
    private function setautor($a){
        $this->autor = $a;        
    }
    private function settotal($total){
        $this->totpaginas = $total;        
    }
    public function setpag($p){
        $this->pagina = $p;        
    }
    private function setaberto($aberto){
        $this->aberto = $aberto;        
    }
    private function setleitor($leitor){
        $this->leitor = $leitor;        
    }
    
    private function gettitulo(){
        return $this->titulo;
    }
    private function getautor(){
        return $this->autor;
    }
    private function gettotal(){
        return $this->totpaginas;
    }
    private function getpag(){
        return $this->pagina;
    }
    private function getaberto(){
        return $this->aberto;
    }
    private function getleitor(){
        return $this->leitor;
    }


}

?>