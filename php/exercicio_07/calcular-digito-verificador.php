<?php
    
// 7. Dado um número de conta-corrente de um determinado banco com 3 dígitos, retorne o seu dígito
// verificador, o qual é calculado da seguinte maneira:
    // 1. Conta corrente 235.
    // 2. Somar o número da conta com o seu inverso: 235+352 = 767.
    // 3. Multiplicar cada dígito pela sua ordem posicional e somar estes resultados.
    // 4. 7x1 + 6x2 + 7x3 = 40. O último dígito desse resultado é o dígito verificador da conta (40 → 0).

    
        // variável com os números
        $str = "235";
        // Regex de pesquisa
        $search = array('#([0-9]{1})([0-9]{1})([0-9]{1})#');
        // Regex de substituição.
        $replace = array("$1.$2.$3");
        // e usamos a preg_replace (consulte o manual do PHP) para substituir.
        // eu usei duas array para fazer a substituição, mais poderia ter usado string's
        $result = preg_replace($search, $replace, $str);
        
        echo($result);
    
//     $contaCorrente = 235;
//     
//     $digitoVerificador = verificarDigitoVerificador(contaCorrente);
//     
//     
//     function verificarDigitoVerificador(contaCorrente){
//         
//     
//     }
    
    
?> 
