<?php

// 16. Escreva um script que ao receber do formulário um código escreva o estado civil apropriado,
// baseando-se na lista a seguir: S – Solteiro, C – Casado, P – Separado, A – Amasiado, Outros e Código
// inválido



    $codigo = $_GET['codigoEstadoCivil'];
    
    switch($codigo){
        case 'S':
            echo "Solteiro";
            break;
        
        case 'C':
            echo "Casado";
            break;
            
        case 'P':
            echo "Separado";
            break;
            
        case 'A':
            echo "Amasiado";
            break;
        
        default:
            echo "Código do estado civil inválido";
    }
?>
