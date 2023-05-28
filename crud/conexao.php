<?php
$hostname = "localhost:3307";
$bancodedados = "login";
$usuario = "root";
$senha = "root";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "ERRO NA CONEXAO";
} else {
    echo "conectado";
}
?>
