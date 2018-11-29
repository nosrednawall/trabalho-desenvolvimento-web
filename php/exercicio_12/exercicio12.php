<?php
    
// 12. Dada uma lista de 5 nomes coloque-a em ordem alfabética.

    $nome1 = $_GET['nome1'];
    $nome2 = $_GET['nome2'];
    $nome3 = $_GET['nome3'];
    $nome4 = $_GET['nome4'];
    $nome5 = $_GET['nome5'];
    
    $nomes = array($nome1,$nome2,$nome3,$nome4,$nome5);
    
    sort($nomes);
    foreach($nomes as $id => $nome){
       echo $nome;
       echo "=> \n";
    }
    

    
?>
