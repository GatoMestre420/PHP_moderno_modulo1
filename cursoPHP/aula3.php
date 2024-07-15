<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Como Efetuar comparações em PHP</h1>
    
<?php

    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];

    echo "Os valores passados foram $n1 e $n2 <br/>";

    $r = ($tipo == "s") ? $n1+$n2: $n1*$n2;
    echo "O resultado será $r";


    $a = 3;
    $b = "3";
    $c = ($a === $b)?"sim":"nao";
    echo "<br/>as variaveis A e B sao iguais? $c";

?>
</body>
</html>