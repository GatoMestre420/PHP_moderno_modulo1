<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro exemplo PHP</title>
    <style>
        h2 {
            color: #80a2ff;
            text-shadow: 1px 1px 1px black;
        }

    </style>
</head>
<body>
   
    <h1>Testando PHP</h1>

    <?php

        $nome = 'Luan';
        $sobrenome = "Curt";

        echo "<h2>Olá,<br> Mundo!</h2>";
        echo "Meu nome é $nome $sobrenome, muito prazer";



        

    ?>
</body>
</html>