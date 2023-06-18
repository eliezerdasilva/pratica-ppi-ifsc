<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela com Pesquisa</title>
  <style>
    .container {
        border: 2px solid black ;
      width: 600px ;
      height: 500px;
      margin: 0 auto;
      text-align: center;
    }

    .search-container {
      margin-bottom: 20px;
    }

    .search-container input[type="text"] {
      padding: 5px;
      width: 200px;
    }

    .search-container input[type="submit"] {
      padding: 5px 10px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: center;
    }

    th {
      background-color: lightgray;
    }

    .edit-button {
      background-color: lightblue;
      padding: 5px 10px;
      border: none;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="search-container">
      <input type="text" placeholder="Pesquisar">
      <input type="submit" value="Pesquisar">
    </div>

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Data de Nascimento</th>
          <th>E-mail</th>
          <th>Editar</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>John Doe</td>
          <td>(123) 456-7890</td>
          <td>01/01/2000</td>
          <td>john.doe@example.com</td>
          <td><input type="button" class="edit-button" value="Editar"></td>
        </tr>
        <!-- Adicione mais linhas conforme necessário -->
      </tbody>
    </table>
  </div>
</body>

</html>
