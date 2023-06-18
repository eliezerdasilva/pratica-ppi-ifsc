<?php

function conectaBD()
{
    try {
        $hostname = "127.0.0.1:3307";
        $bancodedados = "crudphp";
        $usuario = "root";
        $senha = "";
        $con = new PDO("mysql:host=127.0.0.1:3307;dbname=crudphp", $usuario, $senha);
        return $con;
    } catch (PDOException $e) {
        echo "ERRO, banco não conectado";
    }
}
?>