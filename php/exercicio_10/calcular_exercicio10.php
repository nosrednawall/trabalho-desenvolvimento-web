<?php
    
    $primeiro = $_GET['primeiro'];
    $segundo = $_GET['segundo'];
    $terceiro = $_GET['terceiro'];
    
//     echo "esse é o primeiro valor ".$primeiro;
    
    if($primeiro == $segundo && $segundo == $terceiro && $terceiro == $primeiro){
        echo "Os lados informados formam um triangulo equilátero";
    }else if(($primeiro == $segundo && $segundo != $terceiro) ||( $terceiro == $primeiro && $primeiro != $segundo)){
        echo "Os lados informados formam um triangulo isósceles";
    }else{
        echo "Os lados informados formam um triangulo escaleno";
    }
    
// Triângulo equilátero: possui os três lados com medidas iguais.
// Triângulo isósceles: possui dois lados com medidas iguais.
// Triângulo escaleno: possui os três lados com medidas diferentes. 
    
?>
