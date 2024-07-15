<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de atribuições</title>
</head>
<body>



    <h1>Operadores de Atribuição</h1>

   

     <?php 
     
    /* 
    OPERADORES DE ATRIBUIÇÃO
    Adição $a = $a + $b  pode ser escrito $a += $b
    Subtração $a = $a - b pode ser $a -= $b
    multiplicação $a *= $b é a mesma coisa para todos os operadores. Coloca o Operador antes do "=".
    divisão $a /= $b
    módulo $a %= $b
    concatenação $a .= $b 
    */

  


            $preco = $_GET["p"];
            echo "O preço do produto é R$" . number_format($preco, 2, "," , "." );

            $preco += $preco*10/100;
            echo "<br>O novo preco com 10% de aumento sera R$" . number_format($preco, 2, "," , ".");


    ?>
</body>
</html>