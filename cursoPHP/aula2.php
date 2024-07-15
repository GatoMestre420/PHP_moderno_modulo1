<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de incremento</title>
</head>
<body>

<h1>Operadores de Incremento</h1>

<?php

    /* 
    OPERADORES DE INCREMENTO
    pré incremento $a = $a + 1 pode ser escrito ++$a
    pós-incremento $a = $a + 1 pode ser escrito como $a++
    Pré decremento $a = $a - 1 pode ser escrito --$a
    Pós decremento $a = $a - 1 pode ser escrito como $a-- 
    */

    $atual = $_GET["aa"]; // essa linha vai pegar o ano na URL
   

    echo "O ano atual e $atual e o ano anterior é" . --$atual ;

    // Variávies referenciadas

    $a = 3;
    $b = $a;
    $b += 5;
    echo "<br>A variável a vale $a";
    echo "<br>A variável b vale $b";



?>
    
</body>
</html>