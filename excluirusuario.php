<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Exclusão de Usuário - GELATOS</title>
</head>

<body>
    <h1>Exclusão de dados do usuário</h1>
    <br>
    <?php

    
    $id = $_GET["id"];

    echo "<h3>Deseja excluir esse usuário?";
    echo "<p><a href='http://localhost/Gelato/excluiruser.php?id=$id'>Confirmar</a>&nbsp;&nbsp;
|&nbsp;&nbsp;";
    echo "<a href='http://localhost/Gelato/usuarios.php'>Cancelar</a></p></h3>";
    ?>
</body>
</html>
