

/**
3.Escreva um script para ler 3 notas diferentes de um aluno e informar o valor da sua maior nota.
Altere este programa para informar também se a maior nota foi a primeira, a segunda ou a terceira.
 */

//primeiro captura os valores do usuário
var valor1 = parseFloat(prompt("Informe qual é a primeira nota?"));
//depois crio um objeto para essa nota
var nota1 = criarNota(valor1,"primeira");

var valor2 = parseFloat(prompt("Informe qual é a segunda nota?"));
var nota2 = criarNota(valor2,"segunda");

var valor3 = parseFloat(prompt("Informe qual é a terceira nota?"));
var nota3 = criarNota(valor3,"terceira");

//chama a funcao que resolve o problema
verificarQualEAMaiorNota(nota1,nota2,nota3);

//funcao cria o objeto
function criarNota(valor,posicao){
    
    var nota  = new Object();
    nota.valor = valor;
    nota.posicao = posicao;
    
    return nota;
    
}

//funcao que resolve o problema
function verificarQualEAMaiorNota(nota1,nota2,nota3){
    //verifica se é a primeira nota a maior
    if(nota1.valor > nota2.valor && nota1.valor > nota3.valor){
        alert("A sua maior nota foi de "+nota1.valor+" e ela foi a "+nota1.posicao+" a ser informada");
    }//verifica se é a segunda nota a maior
    else if(nota2.valor > nota1.valor && nota2.valor > nota3.valor){
        alert("A sua maior nota foi de "+nota2.valor+" e ela foi a "+nota2.posicao+" a ser informada");
    }//verifica se é a terceira nota a maior
    else if(nota3.valor > nota1.valor && nota3.valor > nota2.valor){
        alert("A sua maior nota foi de "+nota3.valor+" e ela foi a "+nota3.posicao+" a ser informada");
    }else{
        //caso as tres sejam iguais
        alert("As três notas são iguais");
    }
}

/**
 * 
 *     var notas = new Array();
    notas[0] = nota1;
    notas[1] = nota2;
    notas[2] = nota3;
    notas[3] = nota4;
 * 
 */
