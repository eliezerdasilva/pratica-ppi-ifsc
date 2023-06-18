<?php
function  conectaBD(){
    try{
    $con = new PDO("mysql:host=127.0.0.1:3307;dbname=crudphp","","");
    return $con;
    }catch (PDOException $e){
        echo "ERRO, banco não conectado";
    }
}
function insereUsuario($nome,$email,$senha){
    $con = conectaBD();
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try{$sql = "Insert into pessoa (nome,email,senha) values (?,?,?)";
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
    $sql = "DELETA from pessoa where id=?";
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
    $sql = "SELECT * From pessoa where id =?";
    $stm=$con->prepare($sql);
    $stm->bindParam(1,$id);
    $stm->execute();
    $result=$stm->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function recuperaAll(){
    $con = conectaBD();
    $sql = "SELECT * From pessoa";
    $stm=$con->prepare($sql);
    $stm->bindParam(1,$id);
    $stm->execute();
    $result=$stm->fetchAll(PDO::FETCH_ASSOC);
    return $result;

}
?>