<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 11</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $precoProd = $_REQUEST['precoProd']??'0';
        $percent = $_REQUEST['percent']??'0';

    ?>
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="precoProd">Preço do Produto</label>
            <input type="number" name="precoProd" id="precoProd" min="0.10" step="0.01" require value="<?=$precoProd?>">
            <label for="percent">Qual será o percentual do reajuste? (<strong><span id="p">%</span></strong>)</label>
            <input type="range" name="percent" id="percent" min="0" max="100" step="1" oninput="mudaValor()" require value="<?=$percent?>">
            <input type="submit" value="Rejustar">
        </form>
    </main>
    <section>
        <h1>Resultado do Reajuste</h1>
        <?php 
            $desc = ($percent /100) * $precoProd;
            $novoProd = $precoProd + $desc;

            echo "<p>O produto que custava R$".number_format($precoProd, 2, "," , ".").", com <strong>$percent% de aumento</strong> vai passar a custar <strong>R$".number_format($novoProd, 2, "," , ".")."</strong> a partir de agora</p>";

        ?>
    </section>
    <script>

        //Declarações Automátiocas
        mudaValor()
        function mudaValor(){
            p.innerTexT = percent.value;
        }
    </script>
</body>
</html>