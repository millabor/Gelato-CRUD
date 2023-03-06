<?php
	include("conectBDgelato.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>GELATO - PERFIL</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/mainform.css">
	<link rel="stylesheet" type="text/css" href="style.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="container-login100" style="background-image: url('images/Gelados.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<center><a href="http://localhost/Gelato/index.html" target="_blank"><img src="images/img.png" alt="HOME"></a></center>
			<hr>
			<span class="login100-form-title p-b-37">
					Usuários Registrados
				 <hr>	
				</span>
			<div class="tabela">
				<table>
				   <tr>
					 <td><b>Nome</b>&emsp;</td>
					 <td><b>E-mail</b>&emsp;</td>
					 <td><b>Alterar</b> &ensp;</td>
					 <td><b>Excluir</b></td>
				   </tr>
				   <?php 
				   $usuarios = $conexao->query("Select * from usuarios");
				   
				   while ($row = $usuarios->fetch_assoc()) { ?>
				   <tr>
					 <td><?php echo $row["nome"]; ?>&nbsp;</td>
					 <td><?php echo $row["email"]; ?>&nbsp;</td>
					 <td><a class=normal href="http://localhost/Gelato/listadeusuarios.php">Alterar</a>&nbsp;</td>
					 <td><a class=normal href="http://localhost/Gelato/listadeusuarios.php">Excluir</a></td>
				   </tr>
				   <?php } ?>
				</table>
			</div>
			<br>
	</div>
</body>
</html>