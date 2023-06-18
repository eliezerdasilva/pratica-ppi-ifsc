<?php
function  conectaBD(){
    $con = new PDO("mysql:host=localhost;dbname=web","root","root");
    return $con;
}
function insereUsuario($nome,$email,$senha){
    $con = conectaBD();
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try{$sql = "Insert into usuario (nome,email,senha) values (?,?,?)";
    $stm=$con->prepare($sql);
    $stm->bindParam(1,$nome);
    $stm->bindParam(2,$email);
    $stm->bindParam(3,$senha);
    $stm->execute();
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    return $con->lastInsertId();
}
function deletaUsuario($id){
    $con= conectaBD();
    $sql = "DELETA from usuario where id=?";
    try{
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stm=$con->prepare($sql);
        $stm-> bindParam(1,$id);
        $stm->execute();

    }catch(PDOException $e){
        echo 'ERRO'.$e->getMessage();
    }
}
function recuperarUSuario($id){
    $con = conectaBD();
    $sql = "SELECT * From usuario where id =?";
    $stm=$con->prepare($sql);
    $stm->bindParam(1,$id);
    $stm->execute();
    $result=$stm->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function recuperaAll(){
    $con = conectaBD();
    $sql = "SELECT * From usuario";
    $stm=$con->prepare($sql);
    $stm->bindParam(1,$id);
    $stm->execute();
    $result=$stm->fetchAll(PDO::FETCH_ASSOC);
    return $result;

}
?>