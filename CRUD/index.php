<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>kaik</title>
</head>

<body>

    <form id="sec-cad" method="get">

        <div id="container">

            <h3> CADASTRO </h3>

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
        <form method="get" id="filtro-cargo">
            <h3> CONSULTAR </h3>
            <select name="lista-cargo" id="lista">
                <option value="Educador">Educador</option>
                <option value="Gerente">Gerente</option>
                <option value="Analista">Analista</option>
            </select>
            <input type="submit" value="Buscar">
        </form>
    </section>

    <section id="delete-cadastro">
        <form method="get">
            <h3> DELETAR </h3>
            <label for="id-delete">Insira o ID do usuário a ser deletado:</label>
            <input type="number" id="id-delete" name="id-delete">
            <button type="menu">Deletar</button>

        </form>
    </section>

    <section id="cad-funcionario">

        <?php
        function renderTemplate($funcionarios)
        {
            include "./template.php";
        }

        function chamarLista ($cargo) {
            global $conn;
            $selectCargo = $conn->query("select * from funcionarios where cargo = '$cargo';");       
            $rowsFuncionarios = $selectCargo->fetch_all(MYSQLI_ASSOC);

            foreach ($rowsFuncionarios as $funcionarios) {
                renderTemplate($funcionarios);
            }
        }


        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'funcionarios';

        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn) {
            die("Conexão falhou: " . mysqli_connect_error());
        }        

        if ($nome = isset($_GET['nome']) && $salario = isset($_GET['salario']) && $cargo = isset($_GET['cargo']) && $idade = isset($_GET['idade']) && $telefone = isset($_GET['telefone'])) {
            
            $nome = $_GET['nome'];
            $salario = $_GET['salario'];
            $cargo = $_GET['cargo'];
            $idade = $_GET['idade'];
            $telefone = $_GET['telefone'];

            $insertUsuario = $conn->query("insert into funcionarios (nome, salario, cargo, idade, telefone) values ('$nome', '$salario', '$cargo', '$idade', '$telefone');");   
        }
        
        if (isset($_GET['lista-cargo'])) {
            $cargo = $_GET['lista-cargo'];
            chamarLista($cargo);
        }

        if (isset($_GET['id-delete'])) {
            $idDelete = $_GET['id-delete'];

            $deleteUsuario = $conn->query("delete funcionarios from funcionarios where id = '$idDelete';");
        }

        
        
        mysqli_close($conn);

        ?>



    </section>
</body>

</html>