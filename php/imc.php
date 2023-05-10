<?php 
if(!(isset($_GET["peso"]) && isset($_GET["altura"])))
{
    echo "<script> alert('Informe o peso e altura');
    window.location.href='/php';
    </script>";
   // header("Location:/php");   
    exit();
}else{
    $a=$_GET["peso"];
    $b=$_GET["altura"];
 
    function imc ($peso, $altura){
        return $peso/($altura*$altura);
    }
    echo "O imc é ".imc($a,$b);
}