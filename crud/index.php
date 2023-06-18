<?php
session_start(); // Inicia a sessão

$errorStyle = false;

// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os valores enviados pelo formulário
    $login = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica as condições de validação
    if (isset($login) && isset($senha)) {
        include("loginDao.php");
        $erros = login($login, $senha);
        if (!empty($erros)) {
            $errorStyle = true;
            $_SESSION['error_message'] = "Dados inválidos"; // Define a mensagem de erro na sessão
            header('Location: index.php');
            exit;
        } else {
            header('Location: home.php');
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <style>
        <?php if ($errorStyle) { ?>
            input.error {
                border: 2px solid red;
            }
        <?php } ?>
    </style>
</head>

<body>
    <div class="tela_login">
        <h1>Login</h1>
        <form action="" method="post">
            <input class="text <?php if ($errorStyle) echo 'error'; ?>" type="text" placeholder="Email" name="email">
            <input class="text <?php if ($errorStyle) echo 'error'; ?>" type="password" placeholder="Senha" name="senha">
            <input type="submit" value="Entrar" class="button">
        </form>
    </div>
</body>

</html>
