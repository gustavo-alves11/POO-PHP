<pre>
<?php
//puxar a classe para instanciar
    require_once 'POO-03-caneta.php';
//criando objeto
    $C1 = new Caneta();
    /*Sem atribuir valores essa funçao ira 
    pegar valores pre definidos no construtor.
    
    /*ultilizando metodo setter seria assim:
    $C1->setmodelo("bic clistal");
    $C1->setCor("Azul");*/
    print_r($C1);
?>
</pre>


