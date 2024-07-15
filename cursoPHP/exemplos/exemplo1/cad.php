<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Resultado do processamento</h1>
</header>
<main>
    <?php

        $nome = $_REQUEST["nome"] ?? "sem nome";
        $sobrenome = $_REQUEST["sobrenome"] ?? "desconhecido";
        //var_dump($_REQUEST); // <--  função de $_GET $_POST $_COOKIES
        echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong> ! Este é meu site!";

    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
</main>
    
</body>
</html>