<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
     require_once 'classe.php';
        $l1= new Pessoa("gustavo", 18, "M");
        $livro= new livro("Revoluçao dos bichos","george orwell", 147, false, $l1);

        $livro->abrir();
        $livro->setpag(8);
        $livro->voltarPag();
        print_r($livro)

    ?>
    </pre>
</body>
</html>