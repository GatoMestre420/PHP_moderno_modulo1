<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafios PHP 10</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        $anoNasc = $_REQUEST['anoNasc']??'2000';
        $ano = $_REQUEST['ano'] ?? $anoAtual;
        $anoAtual = date('Y'); 
        ?>


        <h1>Calculando sua Idade</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="anoNasc">Em que ano você nasceu ?</label>
            <input type="number" name="anoNasc" value="anoNasc" id="anoNasc" min="1900" max="<?=$anoAtual?>" require value="<?= $anoNasc ?>>
            <label for="ano">Quer saber sua idade em que ano ? ( Atualmente estamos em <?="<strong>". date('Y') ."</strong>"?>)</label>
            <input type="number" name="ano" value="ano" id="anoId" min="1900" required value="<?= $ano ?>">
            <input type="submit" value="Qual será a minha idade?">
        </form>
    </main>
    <section>
        <h1>Resultado</h1>
        <?php


        $idade = $ano - $anoNasc;
        
        


        echo "<p>Quem nasceu em $anoNasc vai ter <strong>$idade</strong> em <strong>$anoAtual</strong></p>"


        ?>
    </section>

</body>

</html>