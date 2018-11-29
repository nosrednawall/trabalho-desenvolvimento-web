<?php

// 17. HTML/CSS/JavaScript/PHP
// Usando os recursos disponíveis para HTML5 e CSS, desenvolva um formulário com as devidas formatações
// que receba as seguintes informações do usuário:
// • Nome – apenas texto.
// • Idade – apenas número e no máximo 3 dígitos.
// • Estado civil – Solteiro, Casado, Separado, Amasiado e Outros.
// • Grau de escolaridade – Dropbox contendo: fundamental, médio, superior, especialização, mestrado
// e doutorado.
// • Hobbies – Pescar, passear, nadar, correr andar de bicicleta, assistir TV, ouvir música, colecionar
// coisas. Pode ter múltiplas escolhas.
// • Sexo – M ou F não podendo escolher as duas opções.
// • Telefone, rua, número da residência.
// • CEP – apenas 8 dígitos.
// • Estado escolher de uma lista com as siglas da UF.
// • País.
// O usuário deverá ser informado por uma caixa de diálogo caso ele não tenha preenchido algum campo e o
// cursor deverá ser setado neste campo.
// Este formulário deverá ter dois botões funcionando devidamente, um para limpar os dados e outro para
// enviar os dados.
// Ao clicar em enviar deverá ser acionado um script PHP com as ações de envio desses dados para um banco
// de dados fictício.




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
