<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>media do aluno</title>
</head>
<body>
    <?php
    $nota1 = $_GET["n1"];
    $nota2 = $_GET["n2"];
    $m = ($nota1 + $nota2) /2;
    echo "A media entre $nota1 e $nota2 e $m <br/>";

    echo "A situação do aluno é:" . (($m > 6)?"APROVADO":"REPROVADO");




    $ano = $_GET["aa"];
    $idade = 2023 - $ano;
    echo "<br/> Quem nasceu em $ano tem idade de $idade anos.";

    $tipo = ($idade >= 18 && $idade<65)?"VOTO OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
    echo "<br/>E DESSA FORMA SEU VOTO É $tipo";


    ?>
</body>
</html>