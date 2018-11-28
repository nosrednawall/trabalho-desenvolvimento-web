<?php

// 8. Ao receber um número informe se ele é positivo, negativo ou nulo.


    $numero_recebido = "-1";
    
    if(!$numero_recebido == null){
        if($numero_recebido < 0){
            echo("O número informado é negativo");
        }else if($numero_recebido > 0){
            echo("O número informado é positivo");
        }else{
            echo("O número informado foi 0");
        }
    }else{
        echo("O número informado é nulo");
    }
?> 
