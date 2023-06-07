<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include 'Imc.php';
    $objeto = new Imc();
    $a= $_POST["peso"];
    $b=  $_POST["altura"];
    $resultado = $objeto->minhaFuncaoDaClasseDois($a, $b);

    echo "IMC: " . $resultado;
    ?>
    <form action="pagina3.php" method="post">
        <label for="">Digite o Nome </label>
        <input type="text" name="nome" id="">
        <label for="">Digite o Email </label>
        <input type="text" name="email" id="">
        <input type="submit" value="Enviar">
    </form>   
</body>
</html>
