<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Lista de Registros</title>
</head>

<body bgcolor="#cce2e8">
    <center>
    <center><a href="index.html"><img src="logosorvete.png"></a></center>
        <h1>Lista de usuários</h1>
        <table border="1px" bordercolor="#0f8aab" style = "background-color:antiquewhite"> 
            <thead>
                <tr>
                    <td width="75" height="60" align="center">
                        <h4>Código</h4>
                    <td width="200" align="center">
                        <h4>E-mail</h4>
                    </td>
                    <td width="200" align="center">
                        <h4>Nome</h4>
                    </td>
                    <td width="100" align="center">
                        <h4>Telefone</h4>
                    </td>
                    <td width="150" align="center">
                        <h4>Endereço</h4>
                    </td>
                    <td width="150" align="center">
                        <h4>Cidade</h4>
                    </td>
                    <td width="150" align="center">
                        <h4>Senha</h4>
                    </td>
                    <td width="75" align="center"><img src="alterar.png" alt="Alteração" width="40" height="40"></td>
                    <td width="75" align="center"><img src="excluir.png" alt="Exclusão" width="40" height="40"></td>
                </tr>
            </thead>
            <tbody>
                <?php

                # Dados para a conexão com o banco de dados
                $servidor = 'localhost';    # Nome DNS ou IP do seu servidor HTTP
                $usuario = 'root';    # Nome de usuário para acesso ao MySQL
                $senha = '';    # Senha de acesso
                $banco = 'formulariogelato'; # Nome do banco de dados
                // Conectar com o Banco de Dados
                $link = mysqli_connect($servidor, $usuario, $senha, $banco);
                if (!$link) {
                    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
                    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
                    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
                    exit;
                }
                //query SQL
                $sql = "SELECT * FROM usuarios";
                $rs = mysqli_query($link, $sql);
                echo "<h4>";
                while ($dado = mysqli_fetch_assoc($rs)) {
                    // Exibe na tela os dados dos contatos da tabelapessoa
                ?>
                    <tr>
                        <td height="30" align="center"><?php echo $dado['id'] ?></td>
                        <td height="30" align="center"><?php echo $dado['email'] ?></td>
                        <td><?php echo $dado['nome'] ?></td>
                        <td><?php echo $dado['fone'] ?></td>
                        <td><?php echo $dado['endereco'] ?></td>
                        <td><?php echo $dado['cidade'] ?></td>
                        <td><?php echo $dado['senha'] ?></td>
                        <td align="center"><?php echo "<a href='edit_usuario.php?id=" . $dado['id'] . "'>Alterar</a>" ?></td>
                        <td align="center"><?php echo "<a href='excluirusuario.php?id=" . $dado['id'] . "'>Deletar</a>" ?></td>
                    </tr>
                <?php
                }
                // Encerra a conexão mysqli_close($link);
                ?>
            </tbody>
        </table>
        <h2>
            <p><a href='http://localhost/Gelato/cadastro.php'>Cadastrar Usuário</a>

            </p>
        </h2>
    </center>
</body>

</html>