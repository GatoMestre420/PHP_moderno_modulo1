<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritméticas</title>
</head>

<style>

    h2 {
        font: 20pt arial;
        color: blue;
    }    
</style>
<body>

    <?php
    $v1 = $_GET["x"];
    $v2 = $_GET["y"];

    echo "<h2> Valores recebidos $v1 e $v2</h2>";

    echo "O valor absoluto de $v2 é " . abs($v2); // Valor Absoluto
    echo "<br>O valor de $v1<sup>$v2</sup> é " . pow ($v1, $v2); // Potenciação
    echo "<br>A raiz de $v1 é" . sqrt($v1); // Raiz Quadrada
    echo "<br/>O valor de $v2 arredondado é" . round ($v2); // ceil floor = palavras que podem serem usadas no lugar do round. CEIL arredonda pra mais, Floor pra menos. 
    echo "<br/>A parte inteira de $v2 é" . intval($v2); // Valor inteiro da variável
    echo "<br/>O valor de $v1 em moeda e R$" . number_format($v1, 2, ",", ".");  // formatação        

    
    ?>
    
</body>
</html>