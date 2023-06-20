<?php
include_once "conexao.php";


if (isset($_GET['id'])) {
    // Obtém o ID do usuário da URL
    $id = $_GET['id'];

        // Chama a função para deletar o usuário no banco de dados

        deletaUsuario($id);

        // Redireciona o usuário de volta para a página de detalhes do usuário

        header("Location: home.php");

 
    } else {
        echo "<p>Preencha todos os campos do formulário.</p>";
    }


?>