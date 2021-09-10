<!DOCTYPE html>
<html>
<head>

</head>

<body>

<?php
require_once 'POO-ENCAP.php';
$c = new ControleRemoto();
$c->ligar();
$c->maisVolume();

$c->abrirMenu();
?>
</body>    


</html>