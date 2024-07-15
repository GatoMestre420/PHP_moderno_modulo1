<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 07</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
            $minimo = 1_420.60;
            $salario = $_REQUEST['sal']?? $minimo;
        ?>
        <h1>Informe seu salário</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Salario (R$)</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
            <p>Considerando o salário minimo de <strong>R$<?=number_format($minimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="calcular">
        
        </form>

    </main>

    <section>
        <h2>Resultado Final</h2>
        <?php 
            $tot = intdiv($salario, $minimo);
            $dif = $salario % $minimo;

            echo "<p>Quem recebe um salário de R\$".number_format($salario, 2, ",", ".")." ganha <strong>$tot salários mínimos</strong> + R\$ ". number_format($dif, 2, "," , ".").".</p>"
        ?>
    </section>


    
</body>
</html>