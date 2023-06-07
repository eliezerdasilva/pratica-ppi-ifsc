<?php 
$login = $_POST['email'];
$senha = $_POST['senha'];
if($login == "admin" && $senha == "123456"){
    echo "feito";
    session_start();
    $_SESSION['login'] = $login;
    echo "<script>setTimeout( 
        function() {window.location.href = 'home.php'},5000
    );
        </script>";
  
}else{
    echo "<script>setTimeout( 
        function() {window.location.href = 'index.html'},5000
    );
        </script>";

}