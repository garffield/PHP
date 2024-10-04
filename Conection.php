<?php

    $servername = 'localhost';
    $database = 'contatos';
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Deu erro irmão: " . mysqli_connect_error());
    }

    echo "Deu certo irmão";
    mysqli_close($conn);

    
?>