<?php

    function cria_array_random($n){

        $vetor_result = array();

        for($i=0;$i<$n;$i++){
            $vetor_result[$i] = rand(0,100);
        }

        return $vetor_result;
    }

    function soma_array($array){
        $soma=0;
        foreach($array as $valor){
            $soma = $soma + $valor;
        }
        return $soma;
    }

    if(isset($_POST['valor'])){
       
        echo "A soma dos valores é: ".soma_array(cria_array_random($_POST['valor']));
        
    }

?>