		<?php
			header("Location: http://localhost/Gelato/login.php");
					
			include_once("conectBDgelato.php");

			$nomev = $_POST['nome'];
			$emailv = $_POST['email'];
			$fonev = $_POST['fone'];
			$enderecov = $_POST['endereco'];
			$cidadev = $_POST['cidade'];
			$senhav = $_POST['senha'];
				
			$result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,fone,endereco,cidade,senha) 
			VALUES ('$nomev','$emailv','$fonev','$enderecov','$cidadev','$senhav')");
			
			$conexao->query($result) or die($conexao->error);
		
		?>