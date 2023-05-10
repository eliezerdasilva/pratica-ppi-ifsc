<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <label for="numero">Número</label>
        <input type="text" name="numero" value=<?php 
        if(isset($_GET['numero'])){
            echo $_GET['numero'] ;
            }else{
                echo "\'\'";
            }
            ?>>
        <input type="submit">
    </form>
    <?php 
    if (isset ($_GET['numero'])){
        $valor=$_GET['numero'];
        for ($i=0; $i<=10; $i++){?>
    <p>  <?php  echo "$i*" .$valor. "=" .$i*$valor ?> </p>
    <?php
        }
    }
    ?>
</body>

</html>