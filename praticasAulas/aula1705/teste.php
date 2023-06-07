<?php
/*$valor_a = 10;
$valor_b = 20;
$valor_c = $valor_a+$valor_b;
function soma($a,$b){
    return $a+$b;
}
echo "<h1> Soma a+b=" .soma($valor_a,$valor_b)."</h1>";
echo '<h1> Soma a+b= $valor_c</h1>';


*/
function cria_valores_random($n){
    $vetor_result = array();
    for($i=0; $i<$n; $i++){
        $vetor_result[$i]=rand();
    }
    return $vetor_result;
}

echo "iniciando a aplicação php\n";

$line = fgets(STDIN);

echo "O resultado é '{$line}'";

echo "iniciando a aplicação php\n";

$line = fgets(STDIN);
$array = cria_valores_random($line);
for($i=0;  $i <count($array)  ;$i++){
    echo  $array[$i]."<br>";
}

function soma_array($array){
    $soma=0;
    foreach($array as $valor){
        $soma = $soma + $valor;
    }
    return $soma;
}
if(isset($_GET['v'])){
    echo soma_array(cria_valores_random($_Get['v']));
}


?>