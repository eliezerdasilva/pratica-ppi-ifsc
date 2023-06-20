<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="cadastro.css">
  <title>Document</title>
</head>
<body>

</body>
</html>

 <?php
    include_once "conexao.php";
    conectaBD();

      
    $email = $_POST['email'];
    $senha = $_POST['senha'];
       
    if (verificarCredenciais($email, $senha)){
      session_start();
      $_SESSION['email'] = $email;
      
      
      header("Location: home.php");

      
     

    }else {
      header('Location:index.html');
    }
    ?>