<!DOCTYPE html>
<!--
13. Crie uma página que contenha os comandos PHP (à sua escolha) incorporados no código HTML.

 -->
 <?php
 
    $primeiro = $_GET['primeiro'];
    $segundo = $_GET['segundo'];
    $operador = $_GET['operador'];
    
    if($operador != null){
        switch($operador){
            case '+':
                $resultado = $primeiro + $segundo;
                echo "o resultado foi :".$resultado;
                break;
                
            case '-':
                $resultado = $primeiro - $segundo;
                echo "o resultado foi :".$resultado;
                break;
                
            case '*':
                $resultado = $primeiro * $segundo;
                echo "o resultado foi :".$resultado;
                break;
                
            case '/':
                $resultado = $primeiro / $segundo;
                echo "o resultado foi :".$resultado;
                break;
                
            default:
                echo "A operação informada não é reconhecida";
        }
    }
 
 ?>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 13</title>
</head>
<body>
    <form>
        <label>informe o primeiro numero</label>
        <input type="text" name="primeiro" >
        <br>
        <label>informe o segundo numero</label>
        <input type="text" name="segundo" >
        <br>
        <label>informe a operacao matemática</label>
        <input type="text" name="operador" >
        <br>
        <input type="submit" value="calcular">
    </form>
</body>
</html>
