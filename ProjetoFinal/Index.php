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
    require_once 'classes.php';

    $v[0]= new Video("Aula1");
    $v[1]= new Video("Aula2");
    $v[2]= new Video("Aula3");
    $v[3]= new Video("Aula4");

    $p= new Usuario("gustavo", 18, "m", 0, "gu");
    $vis[0]= new Visualizacao($p, $v[0]);
    $vis[1]= new Visualizacao($p, $v[1]);
    print_r($v);
    print_r($vis);
    print_r($p);

    ?></pre>
</body>
</html>