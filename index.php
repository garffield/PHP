<?php 
    $array = [[3, 2, 1], [1, 2, 3], [3, 2, 1]];

    $somaTotal = 0;

    // Tamanho do array
    $arraySize = count($array);
    // Coluna do array
    $arrayColumn = count($array[0]);
    
    for ($i=0; $i < $arraySize; $i++) {

        for ($j=0; $j < $arrayColumn; $j++) { 
            $somaTotal += $array[$i][$j];
        }
    }
    echo $somaTotal;
    
?>