<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste do livro</title>
</head>
<body>
    <h1>teste do livro</h1>
<?php

function fatorial($numero) {
    if ($numero == 1)
        return $numero;
    else
        return $numero * fatorial($numero -1);

}
echo fatorial(5) . "<br<\n";
echo fatorial(10) . "<br>\n";

?>

</body>
</html>