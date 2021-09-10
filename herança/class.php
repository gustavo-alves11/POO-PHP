<?php
class Pessoa{
    private $nome;
    private $idade;
    private $sexo;  
    //falta um construtor
    /*function __construct($n, $id, $sexo){
        $this->setnome($n);
        $this->setidade($id);
        $this->setsexo($sexo);
    }*/

    public function fazeraniversario(){
        $this->setidade($this->getidade()+1);

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
}

class Aluno extends Pessoa{
    private $matricula;
    private $curso;

    public function cancerlarmatricula(){
        $this->setmatricula($this->getmatricula(false));
    }

    public function setmatricula($mat){
        $this->matricula = $mat;        
    }
    public function setcurso($curso){
        $this->curso = $curso;        
    }
     function getnome(){
        return $this->matricula;
    }
    public function getcurso(){
        return $this->curso;
    }

}

class Funcionario extends Pessoa{
    private $empregado;
    private $setor;

    public function mudarsetor($setor){
        $this->setsetor($setor);
        echo"mudou o setor";
    }

    public function setsetor($setor){
        $this->setor= $setor;        
    }
    public function setempregado($empregado){
        $this->empregado = $empregado;        
    }
    public function getempregado(){
        return $this->empregado;
    }
    public function getsetor(){
        return $this->setor;
    }

}

class Professor extends Pessoa{
    private $materia;
    private $salario;

    public function aumento($v){
        $this->setsalario($this->getsalario()+$v);
        
    }

    public function setsalario($salario){
        $this->salario= $salario;        
    }
    public function setmateria($materia){
        $this->materia = $materia;        
    }
    public function getsalario(){
        return $this->salario;
    }
    public function getmateria(){
        return $this->materia;
    }

}