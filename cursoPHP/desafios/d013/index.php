<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios PHP 13</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>

<body>
    <?php
    $saque = $_REQUEST['saque'] ?? 0;

    ?>
    <main>
        <h1>Caixa Eletronico</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="saque">Qual o valor que você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="2" require value="<?= $saque ?>">
            <h6>*notas disponiveis: R$100, R$50, R$20, R$10, R$5, R$2</h6>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php
    $resto = $saque;
    //Saque de R$100
    $tot100 = floor($resto / 100);
    $resto %= 100;

    // Saque de R$50
    $tot50 = floor($resto / 50);
    $resto %= 50;

    // Saque de R$20
    $tot20 = floor($resto / 20);
    $resto %= 20;

    // Saque de R$10
    $tot10 = floor($resto / 10);
    $resto %= 10;

    //saque de R$5
    $tot5 = floor($resto / 5);
    $resto %= 5;

    //Saque de R$2
    $tot2 = floor($resto / 2);
    $resto %= 2;

    ?>
    <section>
        <h1>Saque de R$<?= number_format($saque, 2, ",", ".") ?> realizado</h1>
        <p>O caixa eletronico vai te entregar as seguintes notas</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?= $tot100 ?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x<?= $tot50 ?></li>
            <li><img src="imagens/20-reais.jpg" alt="Nota de 20" class="nota"> x<?= $tot20 ?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> x<?= $tot10 ?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> x<?= $tot5 ?></li>
            <li><img src="imagens/2-reais.jpg" alt="Nota de 2" class="nota"> x<?= $tot2 ?></li>
        </ul>

    </section>

</body>

</html>