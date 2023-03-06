<!DOCTYPE html>
<html lang="pt´br">

<head>
	<title>GELATO - LOGIN</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
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
			<form action="check.php" class="login100-form validate-form" method="POST">
				<a href="http://localhost/Gelato/index.html" target="_blank" class="button">
					<center><img src="images/img.png" alt="HOME"></center>
				</a>
				<hr>
				<span class="login100-form-title p-b-37">
					Entrar
					<hr>
				</span>

				<div class="wrap-input100 validate-input m-b-20">
					<input class="input100" type="email" name="email" placeholder="Login">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25">
					<input class="input100" type="password" name="senha" placeholder="Senha">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit" name="entrar"> <a href="index.html" target="_blank">
							Entrar
						</a></button>
				</div>
				<br>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="cadastrar"><a href="cadastro.php" target="_blank">
							Novo Cliente
						</a></button>
				</div>


				<div class="text-center p-t-57 p-b-20">
					<span class="txt1">
						<hr>
						Ou entre com
					</span>
				</div>
				<a href="https://accounts.google.com" target="_blank" class="button">
					<center><img src="images/icons/icon-google.png" alt="GOOGLE"></center>
				</a>
		</div>

		</form>
	</div>
	</div>
</body>

</html>