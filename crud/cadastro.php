<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
  <link rel="stylesheet" href="cadastro.css">
  <script>
    function redirecionarParaHome() {
      window.location.href = "home.php";
    }
  </script>
</head>

<body>
<input class="voltar" type="button" value="Excluir" onclick="redirecionarParaHome()">
  <div class="container">
    <h1>Cadastro</h1>
    <form action="salvar.php" method="post">
      <div class="form-group">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
      </div>
      <div class="form-group">
        <label for="data-nascimento">Data de Nascimento:</label>
        <input type="date" id="data-nascimento" name="data-nascimento" required>
      </div>
      <div class="form-group">
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required>
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="buttons">
        <input type="submit" value="Salvar">
        <input type="button" value="Cancelar">
        <input type="button" value="Excluir">
        
      </div>
    </form>
  </div>
</body>

</html>
