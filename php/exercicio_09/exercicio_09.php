<?php

// 9. Ao receber um número, informe se ele é divisível por 10, por 5, por 2 ou se não é divisível por
// nenhum destes.


    $numero_recebido = "17";
    
    if(!$numero_recebido == null){
        if($numero_recebido % 10 == 0){
            echo("O número informado é dividível por 10");
        }else if($numero_recebido % 5 == 0){
            echo("O número informado é dividível por 5");
        }else if($numero_recebido % 2 == 0){
            echo("O número informado é dividível por 2");
        }else{
            echo("O número não é dividível por 10,5 e 2");
        }
    }else{
        echo("O número informado é nulo");
    }
?> 
