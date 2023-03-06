<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "formulariogelato";

$conexao = new mysqli($host, $usuario, $senha, $bd);

if ($conexao->connect_errno) {
	echo "Erro";
} else {
	echo "Conexão efetuada com sucesso";
}

?>

