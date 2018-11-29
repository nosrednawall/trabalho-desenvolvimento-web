<?php

// 15. Crie um script PHP que converta um valor monetário em dólares para o Real. Os valores devem ser
// informados pelo usuário através de um formulário.


    $dolar = $_GET['dolar'];
    
    $real = $dolar * 3.8471;
    
    echo "O valor em reais é de R$".round($real,2);

    
    
//     valor cotacao verificado no dia 29/11
//     https://economia.uol.com.br/cotacoes/
?>
