<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>kaik</title>
</head>

<body>


    <form method="get">

        <div id="container">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="salario">Salário:</label>
            <input type="float" id="salario" name="salario" required>

            <label for="cargo">Cargo:</label>
            <input type="text" id="cargo" name="cargo" required>

            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade" required>

            <label for="cargo">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" required>

            <button type="menu">Cadastrar</button>

        </div>
    </form>

    <section id="lista-cadastro">
        <select name="Cargos" id="lista">
            <option value="Educador">Educador</option>
            <option value="Gerente">Gerente</option>
            <option value="Analista">Analista</option>
            <input type="submit" value="Buscar">
        </select>
    </section>


    <section id="cad-funcionario">

        <?php
        function renderTemplate($funcionario)
        {
            include "template.php";
        }

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'funcionarios';

        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            die("Conexão falhou: " . mysqli_connect_error());
        }

        $selectFuncionarios = $conn->query('select * from funcionarios');

        $rowsFuncionarios = $selectFuncionarios->fetch_all(MYSQLI_ASSOC);

        
        $nome = $_GET['nome'];
        $salario = $_GET['salario'];
        $cargo = $_GET['cargo'];
        $idade = $_GET['idade'];
        $telefone = $_GET['telefone'];
        
        $insertUsuario = $conn->query("insert into funcionarios (nome, salario, idade, telefone) values ('$nome', '$salario', '$idade', '$telefone');");   
        
        $selectCargo = $conn->query("")

        if (isset($_GET['cargo'])); {
            $cargo = $_GET['cargo']
            $conn = mysqli_connect($servername, $username, $password, $database);

        }

        foreach ($rowsFuncionarios as $funcionario) {
            renderTemplate($funcionario);
        }

        
        mysqli_close($conn);

        ?>



    </section>
</body>

</html>