<pre><?php

require_once "class.php";

$p1= new Pessoa();
$p2= new Aluno();
$p3= new Professor();
$p4= new Funcionario();

$p1-> setnome("gustavo" );
$p2-> setnome("gabriela");

$p3->setsalario(2500.0);
$p3->aumento(500);
$p2-> setmatricula(true);
print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);
?></pre>
