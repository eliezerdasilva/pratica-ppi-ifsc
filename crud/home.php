<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="search.css">
    <link rel="stylesheet" href="button.css">
   
    <title>Document</title>
</head>

<body>

<header>
      <menu>
        <ul>
            <li><a class="link" href="home.php">Home</a></li>
            
            <li><a class="link"  href="sobre.php">Sobre</a></li>
            
            <li><a class="link"  href="logoff.php">Logout</a></li>
            
        </ul>
    </menu>
</header>

<main>



    <h2>Usuários</h2>
    
    <table class='tabela'>
    <form method="GET" action="search.php" >
    <div class="search inputS" >
        <div class="search-box">
            <div class="search-field">
            <input name="pesquisa" placeholder="Digite o nome" class="input" type="text">
            <div type="submit" class="search-box-icon">
                <button class="btn-icon-content">
                <i class="search-icon">
                    <svg xmlns="://www.w3.org/2000/svg" version="1.1" viewBox="0 0 512 512"><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" fill="#fff"></path></svg>
                </i>
                </button>
            </div>
            </div>
        </div>
        </div>    
    </form>
        
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Data de Nascimento</th>
            <th></th>
        </tr>
        <?php
include_once "db.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
}

// Verificar se a pesquisa foi realizada
if (isset($_SESSION['resultado'])) {
    $pesquisa = $_SESSION['resultado'];

    // Verificar se a pesquisa não está vazia
    if (!empty($pesquisa)) {
        // A pesquisa retornou resultados
        foreach ($pesquisa as $row) {
            $dataFormatada = date_create_from_format('Y-m-d', $row['data_nascimento'])->format('d/m/Y');
            echo "<tr>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['telefone'] . "</td>";
            echo "<td>" . $dataFormatada . "</td>";
            echo "<td><a class='linkF ' href='recuperaUpdate.php?id=" . $row['id'] . "'><button  class='button E'>Edit</button></a> | <a class='linkF ' href='delete.php?id=" . $row['id'] . "'><button class='button D'>Delete</button></a></a></td>";
            echo "</tr>";
        }
    } else {
        // A pesquisa não retornou resultados
        echo "Nenhum resultado encontrado.";
    }
} else {
    // A pesquisa não foi realizada, exibir todos os dados da tabela
    $resultado = recuperaALL();

    // Verificar se o resultado não está vazio
    if (!empty($resultado)) {
        // A função retornou resultados
        foreach ($resultado as $row) {
            $dataFormatada = date_create_from_format('Y-m-d', $row['data_Nascimento'])->format('d/m/Y');
            echo "<tr>";
            echo "<td>" . $row['nome'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['telefone'] . "</td>";
            echo "<td>" . $dataFormatada . "</td>";
            echo "<td><a class='linkF ' href='recuperaUpdate.php?id=" . $row['id'] . "'><button  class='button E'>Edit</button></a> | <a class='linkF' href='delete.php?id=" . $row['id'] . "'><button class='button D'>Delete</button></a></td>";
            echo "</tr>";
        }
    } else {
        // A função não retornou resultados
        echo "Nenhum resultado encontrado.";
    }
}
?>




    </table>
       
     
</main>

    
</body>
</html>