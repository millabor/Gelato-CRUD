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
			<center><img src="images/img.png" alt="HOME"></center>
			<hr>
			<span class="login100-form-title p-b-37">
					Usuários Registrados
				 <hr>	
				</span>
			<div class="tabela">
				<table>
				   <tr>
					 <td>Nome</td>
					 <td>E-mail</td>
				   </tr>
				   <?php 
				   include_once("conectBDgelato.php");
				   $usuarios = $conexao->query("Select * from usuarios");
				   
				   while ($row = $usuarios->fetch_assoc()) { ?>
				   <tr>
					 <td><?php echo $row["nome"]; ?></td>
					 <td><?php echo $row["email"]; ?></td>
				   </tr>
				   <?php } ?>
				</table>
			</div>
			<br>
			<div class="container-login100-form-btn">
				<input class="login100-form-btn" type="submit" name="deletar" placeholder=" name="entrar" placeholder="Deletar"> <a href="http://localhost/perfil.php"></a>
			</div>
			<br>
			<div class="container-login100-form-btn">
				<input class="login100-form-btn" type="submit" name="buscar" placeholder="Ver Informações Completas"> <a href="http://localhost/cadastro.php"></a>
			</div>
		</div>
	</div>
</body>
</html>