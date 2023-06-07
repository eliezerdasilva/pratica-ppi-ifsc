<?php
class Imc {
    public function minhaFuncaoDaClasseDois($peso, $altura) {
        if (!(isset($peso) || !isset($altura))) {
            echo "<script>alert('Informe o peso e a altura');
            window.location.href='/php';
            </script>";
            exit();
        } else {
            $a = $peso;
            $b = $altura;
            
            return $this->calcularImc($a, $b);
        }
    }
    
    private function calcularImc($peso, $altura) {
        return $peso / ($altura * $altura);
    }
}
?>