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
        <br>
        <label>Nomes disponíveis</label>
        <ul>
            <li>banana</li>
            <li>gato</li>
            <li>take on me</li>
            <li>he-man</li>
        </ul>
        <input type="text" name="nome" >
        <br>
        <input type="submit" value="Buscar">
    </form>
    <div name="video">
         <?php
            
            $player = "<iframe width=\"560\" height=\"315\" src=\"";
            $restante = "frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
            
            $linkBanana = "https://www.youtube.com/embed/sFukyIIM1XI\"";
            $linkGatos = "https://www.youtube.com/embed/671Xw0SB9aM\"";
            $linkMemme = "https://www.youtube.com/embed/tvVoY-PTf6s\"";
            $linkHeman = "https://www.youtube.com/embed/ZZ5LpwO-An4\"";
            
            
            
            $nome = $_GET['nome'];
            
            if($nome != null){
                switch($nome){
                    case 'banana':
                        echo "<strong>";
                        echo $player.$linkBanana.$restante;
                        echo "</strong>";
                        break;
                        
                    case 'gato':
                        echo "<strong>";
                        echo $player.$linkGatos.$restante;
                        echo "</strong>";
                        break;
                        
                    case 'take on me':
                        echo "<strong>";
                        echo $player.$linkMemme.$restante;
                        echo "</strong>";
                        break;
                        
                    case 'he-man':
                        echo "<strong>";
                        echo $player.$linkHeman.$restante;
                        echo "</strong>";
                        break;
                        
                    default:
                        echo "<h1>Nenhum vídeo encontrado</h1>";
                }
            }
 
        ?>
    </div>
</body>
</html>
