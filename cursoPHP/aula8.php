<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis de Variáveis </title>
</head>
<body>

    <h1>Variáveis de Variáveis</h1>

    <?php

    $x = "abc";
    $$x = "def";
    echo "o conteudo da variavel x e $x";
    echo "<br/>A variavel abc criada recebeu o valor $abc";


    ?>
    
</body>
</html>