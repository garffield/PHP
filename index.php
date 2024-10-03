<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulário Simples</title>
</head>

<body>
    <div class="container">

        <form method="get">

            <label for="numero1">Numero 1:</label>
            <input type="number" id="numero1" name="numero1" required>

            <label for="numero2">Numero 2:</label>
            <input type="number" id="numero2" name="numero2" required>

            <label for="numero3">Numero 3:</label>
            <input type="number" id="numero3" name="numero3" required>

            <button type="submit">Processar</button>

        </form>
    </div>
</body>

</html>

<?php

$n1 = intval($_GET['numero1']);
$n2 = intval($_GET['numero2']);
$n3 = intval($_GET['numero3']);


$somaAeB = $n1 + $n2;

echo 'Soma entre N1 e N2: ' . $somaAeB . '<br>';

if ($somaAeB == $n3) {
    echo 'A soma de N1 e N2 é igual a N3' . '</br>';
} else {
    echo 'Soma entre N1 e N2: ' . $somaAeB . '</br>';
    echo 'A soma de N1 e N2 é diferente de N3';
}

?>