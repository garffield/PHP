<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="get">
        <label for="num">Digite um numero: </label>
        <input type="number" id="num" name="sucessor">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php
    $sucessor = intval($_GET ['sucessor']);

    echo 'Sucessor: ' . $sucessor + 1 . '</br>';
    echo 'Antecessor: ' . $sucessor - 1 . '</br>';
?>