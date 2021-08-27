<pre>
<?php
//Estudando orientado a objeto
echo("POO");
echo("<br>");
//puxar a classe para instanciar
    require_once 'POO-02-caneta.php';
    $C1 = new Caneta;
    $C1->modelo = "bic clistal";
    $C1->cor = "Azul";
    //$c1->ponra = 0.8;
    //$C1->carga = 80;
    $C1->tampar();
    $C1->rabiscar();
    echo("<br>");
    print_r($C1);
    
?>
</pre>


