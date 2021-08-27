<?php
//Estudando orientado a objeto
echo("POO");
echo("<br>");
//puxar a classe para instanciar
    require_once 'POO-caneta.php';
    $C1 = new Caneta;
    $C1->cor = "Azul";
    $C1->ponta = 0.5;
    $C1->tampada = false;
    $C1->destampar();
    $C1->rabiscar();
    
    //var_dump($C1);
    print_r($C1);
//Instanciando um novo objeto 
    $C2= new Caneta;
    $C2->cor = "Vermelha";
    $C2->ponta = 0.9;
    $C2->carga = 85;
    $C2->tampada = false;
?>