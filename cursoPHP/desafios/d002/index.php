<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com numeros aleatórios</h1>
        <?php 

        $min = 0;
        $max = 1000;
        $num = mt_rand($min, $max);
        echo "<p>Gerando um numero aleatório entre $min e $max ...<br>O valor gerado foi <strong>$num</strong></p>";

        ?>
        <button onclick="javascript: document.location.reload()">&#x1F504; Gerar outro</button>
        
    </main>


    
</body>
</html>