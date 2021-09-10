<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><pre>
    <?php
    require_once 'POO-rela.php';
    $P1 = array(); 
    $P[0]= new Piloto("Lewis", 25, 100, 150, "mercedes", "Bottas");
    $P[1]= new Piloto("Bottas", 25, 16, 100, "mercedes", "lewis");
    $P[2]= new Piloto("Carlos Sains", 25, 15, 50, "mercedes", "Chales");
    $P[3]= new Piloto("Charles", 25, 10, 40, "mercedes", "Carlos Sains");    
    //$P[2]->apresentar();
    $GP = new Corrida();
    $GP->iniciarcorrida($P[0], $P[1], $P[2], $P[3]);
    print_r($GP)
    ?><pre>
</body>
</html>