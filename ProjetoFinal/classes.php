<?php
require_once 'interface.php';

Class  Video implements Acoes{
    private $titulo;
    private $views;
    private $pausado;
    private $like;
    private $avaliacao;
    
    function __construct($titulo){
        $this->titulo = $titulo;
        $this->views = 0; 
        $this->curtidas = 0;
        $this->reproduzindo = false;
        $this->avaliacao = 0;

    }

    public function Play(){
        $this->setpausado(true);
        $this->setviews($this->getviews()+1);
    }
    public function Pause(){
        $this->setpausado(false);
    }
    public function like(){
        $this->setlike($this->getlike+1);
    }
    
    //setters e Getters 
    public function setpausado($pausado){
        $this->pausado = $pausado;
    }
    public function setlike($like){
        $this->like = $like;
    }
    public function getpausado(){
        return $this->pausado;
    }
    
    public function setavaliacao($avaliacao){
        $media= ($this->avaliacao + $avaliacao)/$this->getviews();
        $this->avaliacao = $media;
    }
    public function getavaliacao(){
        return $this->avaliacao;
    }
    public function getlike(){
        return $this->like;
    }
    public function settitulo($titulo){
        $this->titulo = $titulo;
    }
    public function setviews($views){
        $this->views = $views;
    }
    public function gettitulo(){
        return $this->titulo;
    }
    public function getviews(){
        return $this->views;
    }
}


abstract class Pessoa{
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;

    public function __construct($nome, $idade, $sexo, $experiencia){
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = $experiencia;
        
    }

    public function ganharexperiencia(){
    $this->setexperiencia($this->getexperiencia()+1);
    
    }
            
    public function setnome($n){
        $this->nome = $n;        
    }
    public function setidade($id){
        $this->idade = $id;        
    }
    public function setsexo($sexo){
        $this->sexo = $sexo;        
    }
    public function getnome(){
      return $this->nome;
    }
    public function getidade(){
        return $this->idade;
    }
    public function getsexo(){
      return $this->sexo;
    }
    
    public function setexperiencia($experiencia){
        $this->experiencia = $experiencia;        
    }
    public function getexperiencia(){
      return $this->experiencia;
    }
    
}

Class Usuario extends Pessoa{
    public $login;
    public $totAssistido;

    public function __construct($nome, $idade, $sexo, $experiencia, $login){
        parent::__construct($nome, $idade, $sexo, $experiencia);
        $this->login = $login;
        $this->totAssistido = 0;

    }
    
    public function viumaisum(){
        this->settotAssistido($this->totAssistido()+1);    
    }
    
    public function setlogin($login){
        $this->login = $login;        
    }
    public function getlogin(){
      return $this->login;
    }
    public function settotAssistido($totAssistido){
        $this->totAssistido = $totAssistido;        
    }
    public function gettotAssistido(){
      return $this->totAssistido;
    }
}

Class visualizacao{
    public $espectador;
    public $filme;

    public function __construct($p, $u){
        $this->setespectador($p);
        $this->setfilme($u);
        $this->espectador->settotAssistido($this->espectador->gettotAssistido()+1);
    }

    public function avaliar(){
        $this->filme->setavaliacao(5);
    }
    public function avaliarPorc($porc){
        $nova = 0;
        if($porc<= 20){
            $nome = 3;
        } 
        elseif($porc>=50){
            $nova = 5;
        }
        elseif($porc<=90){
            $nova = 8;
        }
        else{
            $nova=10;
        }
        $this->filme->setavaliacao($nova);

    }
    public function avaliarNota($nota){
        $this->filme->setavaliacao($nota);
    } 


    
    public function setespectador($espectador){
        $this->espectador = $espectador;        
    }
    public function getespectador(){
      return $this->espectador;
    }
    public function setfilme($filme){
        $this->filme = $filme;        
    }
    public function getfilme(){
      return $this->filme;
    }
}