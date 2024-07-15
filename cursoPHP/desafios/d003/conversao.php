<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 03 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>

        <?php 
            $cotacao = 5.17;

            $real = $_REQUEST["din"] ?? 0;
            $dolar = $real / $cotacao;
            
            //echo "\nSeus R\$" . number_format($real, 2, ",", ".")  . " equivalem a US\$" . number_format($dolar, 2, ",", ".");


            $padrao = numfmt_create("pt_BR", numberFormatter::CURRENCY);
            echo "<p>\nSeus " . numfmt_format_currency($padrao, $real, "BRL") . " equivale a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";

        ?>

        <button onclick="javascript:history.go(-1)">Voltar</button>

        

    </main>
    
</body>
</html>
