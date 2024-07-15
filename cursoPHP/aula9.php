<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 8</title>
</head>
<body>
<h1>Formulário em HTML e Script PHP</h1>
<div>
    <form method= "get" action="aula8.php"></form>
        valor: <input type="number" name="v"/>
        <input type="submit" value="calcular raiz"/>
</form>
</div>

    <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz de $valor é igual a " . number_format($rq, 2 );

    ?>
    
</body>
</html>