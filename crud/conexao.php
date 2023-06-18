<?php
function conectBD(){
$hostname = "localhost:3307";
$bancodedados = "login";
$usuario = "root";
$senha = "root";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "ERRO NA CONEXAO";
} else {
    echo "conectado";
}}
function insereUsuario ($nome,$email,$senha,$dataFormatada,$tele){
    try{
        $con=conectaBD();

        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO usuario (nome,email,senha,data_nascimento,telefone) VALUES (?,?,?,?,?)";

    $stm=$con->prepare($sql);
    $stm->bindParam(1,$nome);
    $stm->bindParam(2,$email);
    $stm->bindParam(3,$senha);
    $stm->bindParam(4,$dataFormatada);
    $stm->bindParam(5,$tele);
    $stm->execute();
    
    } catch(PDOExeption $e) {
        echo 'ERROR: '. $e->getMessage();
    
    }
    
    return $con->lastInsertId();
}

function atualizaUsuario($id, $nome, $email, $senha ,$dataFormatada, $tele) {
    $con = conectaBD();
    $sql = "UPDATE usuario SET nome = ?, email = ?, senha = ?, data_nascimento = ?, telefone = ? WHERE id = ?";
    try {
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stm = $con->prepare($sql);
        $stm->bindParam(1, $nome);
        $stm->bindParam(2, $email);
        $stm->bindParam(3, $senha);
        $stm->bindParam(4,$dataFormatada);
        $stm->bindParam(5,$tele);
        $stm->bindParam(6, $id);
        $stm->execute();
        
    } catch (PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
}



    function deletaUsuario($id){
        $con=conectaBD();
        $sql="DELETE FROM usuario WHERE id= ?";
        try{
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stm = $con->prepare($sql); // Correção: criar a declaração preparada corretamente
            $stm->bindParam(1, $id);
            $stm->execute();
        }catch (PDOException $e){

            echo 'ERROR: '. $e->getMessage();

        }
    }

    

    function recuperaUsuario($id) {
        $con = conectaBD();
        $sql = "SELECT * FROM usuario WHERE id = ?";
        $stm = $con->prepare($sql);
        $stm->bindParam(1, $id);
        
        try {
            $stm->execute();
            $result = $stm->fetchAll(PDO::FETCH_ASSOC);
            if ($result && count($result) > 0) {
                return $result[0];
            } else {
                return null; // Retorna null se nenhum resultado for encontrado
            }
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();
            return null;
        }
    }
    

   

    
    function recuperaALL(){
        $con=conectaBD();
        $sql="SELECT * FROM usuario";
        $stm=$con->prepare($sql);
    
        $stm->execute();
        $result=$stm->fetchAll(PDO::FETCH_ASSOC);
        return $result;
        
        
    }

  

    


    function verificarCredenciais($email, $senha) {
        $con=conectaBD();
       
        // Consulta SQL para verificar as credenciais
        $sql = "SELECT * FROM usuario WHERE email = ? AND senha = ?";
        $stm= $con->prepare($sql);
        $stm->bindParam(1,$email);
        $stm->bindParam(2,$senha);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        
       
        // Verifica se a consulta retornou algum resultado
        if (count($result) > 0) {
            // As credenciais são válidas
        
            return true;
        } else {
            // As credenciais são inválidas
        
        
            return false;
        }
    }
?>
