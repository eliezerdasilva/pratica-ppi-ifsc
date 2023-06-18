
<?php
include_once "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se os campos do formulário foram preenchidos
   
        // Obtém os valores dos campos do formulário
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data = $_POST['dataNas'];
        $dataFormatada = date_create_from_format('d/m/Y', $data)->format('Y-m-d');
        $tele = $_POST['telefone'];

        // Chama a função para atualizar o usuário no banco de dados

        atualizaUsuario($id, $nome, $email, $senha, $dataFormatada, $tele);

        // Redireciona o usuário de volta para a página de detalhes do usuário

        header("Location: home.php");
 
    
}
?>