<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <menu>
        <!--Lista de intens home, sobre e logout -->
        <?php 

        session_start();
        if(!isset($_SESSION['login'])){
            header('Location: index.html');
        }
        echo "Bem vindo".$_SESSION['login'];
        ?>
        <ul>
            <li><a href="home.php"> Home </a></li>
            <li><a href="index.html"> Sobre  </a></li>
            <li><a href="index.html"> Logout </a></li>
        </ul>
    </menu>
</body>
</html>
        