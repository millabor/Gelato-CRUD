<meta charset="utf-8">
<?php
   session_start();
   include 'conectBDgelato.php';

   if (empty($_POST['email']) or empty($_POST['senha'])) {

       header('Location: http://localhost/login.php');
       exit();
   }

   $emailogin = mysqli_real_escape_string($conexao, $_POST['email']);
   $senhalogin = mysqli_real_escape_string($conexao, $_POST['senha']);

   $query_Logar = "SELECT * FROM usuarios WHERE email = '$emailogin' AND senha = '$senhalogin'";

   $result = mysqli_query($conexao, $query_Logar);

   $rows_verify = mysqli_num_rows($result);

   if ($rows_verify == 1) {
       $_SESSION['email'] = $emailogin;
       header('Location: http://localhost/index.html');
       exit();
   }
   else{
       header('Location: http://localhost/login.php');
   }
?> 