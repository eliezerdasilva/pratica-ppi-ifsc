<?php
require 'conexao.php';

function login($email, $senha)
{
    $con = conectaBD();
    $sql = "SELECT * FROM pessoa WHERE email = ? AND senha = ?";
    $stm = $con->prepare($sql);
    $stm->bindParam(1, $email);
    $stm->bindParam(2, $senha);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    
    $erros = array();
    if ($stm->rowCount() > 0) {
        echo "Login bem-sucedido!";
        return;
    } else {
        $erros['dadosinvalidos'] = true;
        return $erros;
    }
}
?>
