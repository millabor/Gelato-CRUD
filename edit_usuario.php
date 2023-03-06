<?php

session_start();
include_once("conectBDgelato.php");

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id ='$id'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Editar Usuários</title>
</head>

<body bgcolor="#cce2e8">
    <center><a href="index.html"><img src="logosorvete.png"></a></center>

    <center>
        <h1>Editar usuário</h1>
    </center>

    <?php

    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    ?>

    <center>
        <form method="POST" action="proc_edit_usuario.php">

            <input type="hidden" name="id" value="<?php echo $row_usuario['id'];
                                                    ?>"><br>

            <label>E-mail: </label>
            <input type="email" name="email" placeholder="Digite seu novo e-mail" value="<?php echo $row_usuario['email'];
                                                                                        ?>"><br><br>

            <label>Nome: </label>
            <input type="text" name="nome" placeholder="Digite seu novo nome" value="<?php echo $row_usuario['nome'];
                                                                                        ?>"><br><br>

            <label>Telefone: </label>
            <input type="tel" name="fone" placeholder="Digite seu novo telefone" value="<?php echo $row_usuario['fone'];
                                                                                        ?>"><br><br>

            <label>Endereço: </label>
            <input type="text" name="endereco" placeholder="Digite seu novo endereço" value="<?php echo $row_usuario['endereco'];
                                                                                                ?>"><br><br>

            <label>Cidade: </label>
            <input type="text" name="cidade" placeholder="Digite sua nova cidade" value="<?php echo $row_usuario['cidade'];
                                                                                            ?>"><br><br>

            <label>Senha: </label>
            <input type="password" name="senha" placeholder="Digite sua nova senha" value="<?php echo $row_usuario['senha'];
                                                                                            ?>"><br><br>

            <input type="submit" width="48" height="60" value="Editar">


        </form>

        <p><a href='http://localhost/Gelato/usuarios.php'>Lista de Usuários</a></p>
        <p><a href='http://localhost/Gelato/cadastro.php'>Cadastrar Usuários</a>
    </center>

    
    </p>
</body>";
</body>

</html>