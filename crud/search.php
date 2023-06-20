<?php
include_once "conexao.php";

if (isset($_GET['pesquisa'])) {
    
    $pesquisa = $_GET['pesquisa'];

    // Consulta SQL para buscar registros com base no nome
    $sql = "SELECT * FROM usuarios WHERE nome LIKE :pesquisa";
    $con=conectaBD();
    // Prepara a consulta
    $stm = $con->prepare($sql);
    $stm->bindValue(':pesquisa', '%' . $pesquisa . '%');
    $stm->execute();

    // Obtém os resultados da consulta
    session_start();
    $_SESSION['resultado'] = $stm->fetchAll(PDO::FETCH_ASSOC);

    header("Location: home.php");
    
    
}
?>