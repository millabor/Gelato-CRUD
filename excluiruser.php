<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Exclusão do Usuário - GELATOS</title>
</head>

<body>
    <h1>Exclusão de dados do usuário</h1>
    <?php
    $id = $_GET["id"];
    // Conectar com o Banco de Dados
    $link = mysqli_connect('localhost', 'root', '', 'formulariogelato');
    if (!$link) {
        echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;

        exit;
    }

 
    //query SQL
    $sql = "DELETE FROM usuarios WHERE id = $id";
    $rs = mysqli_query($link, $sql);
    if ($rs) {
        echo "<br><h3>Usuário excluido com sucesso!<br><h3>";
    } else {
        echo "<br><h3>Erro ao excluir usuário!<br><h3>";
    }
    // Encerra a conexão mysqli_close($link);
    echo "<p><a href='http://localhost/Gelato/usuarios.php'>Registro de usuários</a><br>";
    echo "<a href='http://localhost/Gelato/cadastro.php'>Cadastrar Contatos</a><p/>";
    ?>
</body>

</html>