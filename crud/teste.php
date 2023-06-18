<?php
// Verifica se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os valores enviados pelo formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verifica as condições de validação
    $erros = array();

    if ($username !== 'usuariocorreto') {
        $erros['username'] = 'Nome de usuário incorreto';
    }

    if ($password !== 'senhacorreta') {
        $erros['password'] = 'Senha incorreta';
    }

    // Se não houver erros, redireciona para a página de sucesso
    if (empty($erros)) {
        header('Location: pagina_sucesso.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tela de Login</title>
    <style>
        .erro {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Tela de Login</h2>

    <?php if (!empty($erros)): ?>
        <p class="erro">Erro ao efetuar login:</p>
        <ul class="erro">
            <?php foreach ($erros as $erro): ?>
                <li><?php echo $erro; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <form action="" method="POST">
        <label for="username">Usuário:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Senha:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Entrar">
    </form>
</body>
</html>
