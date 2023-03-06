<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>GELATO - CADASTRO</title>
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
<!--===============================================================================================-->
</head>
<body>
	<div class="container-login100" style="background-image: url('images/Gelados.jpg');">
		
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form action="formulario.php" class="login100-form validate-form" method="POST">
				<a href="http://localhost/Gelato/index.html" target="_blank" class="button">
						<center><img src="images/img.png" alt="HOME"></center>
					</a>
					<hr>
				<span class="login100-form-title p-b-37">
					Preencha o formulário abaixo
				 <hr>	
				</span>

				<div class="wrap-input100 validate-input m-b-20">
					<input class="input100" type="text" name="nome" placeholder="Nome" required>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input m-b-20">
					<input class="input100" type="email" name="email" placeholder="Email" required>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input m-b-20">
					<input class="input100" type="tel" name="fone" placeholder="Número de telefone" required>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input m-b-20">
					<input class="input100" type="text" name="endereco" placeholder="Endereço" required>
					<span class="focus-input100"></span>
				</div>
				
				<div class="wrap-input100 validate-input m-b-20">
					<input class="input100" type="text" name="cidade" placeholder="Cidade" required>
					<span class="focus-input100"></span>
				</div>
				
			<div class="wrap-input100 validate-input m-b-25">
					<input class="input100" type="password" name="senha" placeholder="Senha" required>
					<span class="focus-input100"></span>
				</div>

			<div class="container-login100-form-btn">
				<input class="login100-form-btn" type="submit" name="enviar" placeholder="enviar">
			</div>
			
				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
			</form>
				</div>
		</div>
</body>
</html>