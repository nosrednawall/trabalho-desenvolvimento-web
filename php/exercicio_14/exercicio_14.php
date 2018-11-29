<!DOCTYPE html>
<!--
14. Crie um script PHP que contenha tags HTML (à sua escolha) incorporadas nele.

 -->

<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atividade 14</title>
</head>
<body>
    <form>
        <label>informe o nome do vídeo que deseja assistir</label>
        <input type="text" name="nome" >
        <br>
        <input type="submit" value="Buscar">
    </form>
    <div name="video">
         <?php
            
            $player = "<iframe width=\"560\" height=\"315\" src=\"";
            $restante = "frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
            
            $linkBanana = "https://www.youtube.com/embed/sFukyIIM1XI\"";
//             $linkGatos = "";
            
            
            
            $nome = $_GET['nome'];
            
            if($nome != null){
                switch($nome){
                    case 'banana':
                        echo "<strong>";
                        echo $player.$linkBanana.$restante;
                        echo "</strong>";
                        break;
                        
                    case '':
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
                        echo "<h1>A operação informada não é reconhecida</h1>";
                }
            }
 
        ?>
    </div>
</body>
</html>
