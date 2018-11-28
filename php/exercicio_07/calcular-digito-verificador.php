<?php
    
// 7. Dado um número de conta-corrente de um determinado banco com 3 dígitos, retorne o seu dígito
// verificador, o qual é calculado da seguinte maneira:
    // 1. Conta corrente 235.
    // 2. Somar o número da conta com o seu inverso: 235+352 = 767.
    // 3. Multiplicar cada dígito pela sua ordem posicional e somar estes resultados.
    // 4. 7x1 + 6x2 + 7x3 = 40. O último dígito desse resultado é o dígito verificador da conta (40 → 0).
    
    //RECEBER OS DADOS DO USUÁRIO
    //__________________________________________
    
    // recebe os dados do usuário
    $contaCorrente = "235";
    
    //chama a funcao que efua o calculo do digito verificador, passando o numero da conta corrente
    $digitoVerificador = verificarDigitoVerificador($contaCorrente);
    
    //imprime na tela
    echo($digitoVerificador);
    
    //funcao
    function verificarDigitoVerificador($contaCorrente){
        //pega o numero invertido
        $valorInvertido = $contaCorrente[2].$contaCorrente[1].$contaCorrente[0];
        //efetua a soma dos valores
        $soma =  $valorInvertido + $contaCorrente;
        //faz o parse de inteiro para string
        $soma = "$soma";
        //faz o calculo de cada valor
        $primeiroDigito = $soma[0] * 1;
        $segundoDigito = $soma[1] * 2;
        $terceiroDigito = $soma[2] * 3;
        //faz a soma final
        $digitoVerificador = $primeiroDigito + $segundoDigito + $terceiroDigito;
        //retorna o digito verificador
        return  $digitoVerificador;
    }
?> 
