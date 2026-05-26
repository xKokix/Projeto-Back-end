<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema web 2</title>
</head>

<body>
    <h1>Cadastro de Usuário</h1>
    <p>Preencha os dados abaixo.</p>

    <form id="cadastroForm" method="POST" action="">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone" required><br><br>

        <button type="submit">Cadastrar</button>
    </form>

    <h2>Resultado</h2>
    <p id="resultado">
        <?php
        // Verifica se o formulário foi enviado via método POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Coleta e sanitiza os dados recebidos para evitar falhas de segurança simples
            $nome = htmlspecialchars($_POST['nome']);
            $email = htmlspecialchars($_POST['email']);
            $telefone = htmlspecialchars($_POST['telefone']);

            // Exibe o resultado processado pelo PHP
            echo "Dados recebidos: Nome = " . $nome . ", E-mail = " . $email . ", Telefone = " . $telefone;
        } else {
            // Mensagem padrão caso a página acabe de ser aberta
            echo "Nenhum dado enviado ainda.";
        }
        ?>
    </p>

</body>

</html>