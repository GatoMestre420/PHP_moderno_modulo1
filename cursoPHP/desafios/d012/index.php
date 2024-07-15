<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 12</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $total_segundos = $_GET['seg'] ?? 0;
    ?>
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="seg">Qual o valor em segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" require value="<?= $total_segundos ?>">
            <input type="submit" value="Calcular">

        </form>
    </main>
    <?php

    $sobra = $total_segundos;
    //total de semanas
    $semana = (int)($sobra / 604_800);
    $sobra = $sobra % 604_800;
    //Total de dias
    $dia = (int)($sobra / 86_400);
    $sobra = $sobra % 86_400;
    //Total de horas
    $hora = (int)($sobra / 3_600);
    $sobra = $sobra % 3_600;
    //Total Minutos
    $minuto = (int)($sobra / 60);
    $sobra = $sobra % 60;
    //total de Segundos
    $segundo = $sobra;

    ?>
    <section>
        <h1>Totalizando Tudo</h1>
        <p>Analisando o valor que você digitou, <strong><?= number_format($total_segundos, 2, ", ", ".") ?></strong>  segundos equivalem a um total de:</p>
        <ul>
            <li><?= $semana ?> Semanas</li>
            <li><?= $dia ?> Dias</li>
            <li><?= $hora ?> Horas</li>
            <li><?= $minuto ?> Minutos</li>
            <li><?= $segundo ?> Segundos</li>
        </ul>
    </section>

</body>

</html>