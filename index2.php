<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        <label for="num">Digite um numero: </label>
        <input type="number" id="num" name="numeroParImpar">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>

<?php

$num = intval($_GET['numeroParImpar']);

if ($num % 2 == 0) {
    echo 'Este número é PAR' . '<br>';
} elseif ($num != 0) {
    echo 'Este numero é IMPAR' . '<br>';
}
?>