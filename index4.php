<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get">
        
        <label for="peso">Digite seu peso:</label>
        <input type="number" id="peso" name="peso">
        
        <label for="altura">Digite sua altura:</label>
        <input type="number" id="altura" name="altura">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php
    $peso = intval($_GET ['peso']);
    $altura = intval($_GET ['altura']);

    $altura = $altura / 100;

    $imcCalculo = $peso / ($altura * $altura);

    echo "<h2>Seu IMC é: " . $imcCalculo . '</h2>'; 
?>
