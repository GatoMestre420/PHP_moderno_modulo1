<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>]
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    
</header>
<main>
    <?php
        echo "<h1>Resultado do Final</h1>";
        $numero = $_REQUEST["numero"] ?? 0;
        echo "O numero escolhido foi <strong>$numero</strong>";
        echo "<br> O seu <em>antecessor</em> é " . ($numero - 1);
        echo "<br> O seu <em>sucesssor</em> é " . ($numero + 1);
    

    ?>
    <button onclick="javascript:window.location.href='index.html'">&#x2b05; Voltar</button>   
</main>


    
</body>
</html>