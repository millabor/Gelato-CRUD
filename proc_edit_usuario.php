<?php 

session_start();
include_once("conectBDgelato.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST,'email', FILTER_SANITIZE_EMAIL);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$fone = filter_input(INPUT_POST, 'fone', FILTER_SANITIZE_NUMBER_INT);
$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_usuario = "UPDATE usuarios SET email='$email', nome='$nome', fone ='$fone', endereco='$endereco', 
cidade='$cidade', senha='$senha' WHERE id='$id'";

$resultado_usuario = mysqli_query($conexao, $result_usuario);

header("Location: http://localhost/Gelato/listadeusuarios.php");


?>