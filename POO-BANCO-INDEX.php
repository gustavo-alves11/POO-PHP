<pre>
<?php

require_once 'POO-BANCO.php';
$nome="Gustavo"
$B= new banco();
//$B->setDono("Gustavo");
$B->setDono($nome);
$B->AbrirConta();
$B->FecharConta();
//$B->FecharConta();

print_r($B);



?>
</pre>