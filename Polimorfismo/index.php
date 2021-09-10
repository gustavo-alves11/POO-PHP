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
        #para facilitar a ligaçao com as outras classes 
        function incluirClasse($nomeClasse){
            require_once($nomeClasse.".php");
        }
        spl_autoload_register("incluirClasse");

        $M= new Mamifero();
        $P= new Peixe();
        $R= new Reptil();
        $A= new Ave();
        $C= new Canguru();
        $K= new Cachorro();
        $R->locomover();
        $C->locomover();
        $C->UsarBolsa();
        $M->locomover();

        print_r($M);
        print_r($P);
        print_r($R);
        print_r($A);
        print_r($C);
        print_r($K);
    ?></pre>
</body>
</html>