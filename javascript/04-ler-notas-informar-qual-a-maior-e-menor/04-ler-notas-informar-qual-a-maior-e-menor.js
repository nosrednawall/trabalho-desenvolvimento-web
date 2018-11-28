

/**
4. Escreva um script para ler 3 notas de um aluno e informar o valor da sua maior e menor nota.
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
verificarQualEAMaiorEMenorNota(nota1,nota2,nota3);

//funcao cria o objeto
function criarNota(valor,posicao){
    
    var nota  = new Object();
    nota.valor = valor;
    nota.posicao = posicao;
    
    return nota;
    
}

//funcao que resolve o problema
function verificarQualEAMaiorEMenorNota(nota1,nota2,nota3){
    //verifica se é a primeira nota a maior
    var maiorNota = null;
    var menorNota = null;
    var todasSaoIguais = null;
    
    while(maiorNota == null){
        if(nota1.valor > nota2.valor && nota1.valor > nota3.valor){
            maiorNota = nota1;
            break;
        }//verifica se é a segunda nota a maior
        else if(nota2.valor > nota1.valor && nota2.valor > nota3.valor){
            maiorNota = nota2;
            break;
        }//verifica se é a terceira nota a maior
        else if(nota3.valor > nota1.valor && nota3.valor > nota2.valor){
            maiorNota = nota3;
            break;
        }else{
            //caso as tres sejam iguais
             todasSaoIguais = nota1;
            break;
        }
    }
    while(menorNota == null){
        if(nota1.valor < nota2.valor && nota1.valor < nota3.valor){
            menorNota = nota1;
            break;
        }//verifica se é a segunda nota a maior
        else if(nota2.valor < nota1.valor && nota2.valor < nota3.valor){
            menorNota = nota2;
            break;
        }//verifica se é a terceira nota a maior
        else if(nota3.valor < nota1.valor && nota3.valor < nota2.valor){
            menorNota = nota3;
            break;
        }else{
            //caso as tres sejam iguais
            todasSaoIguais = nota1;
            break;
        }
    }
    if(!todasSaoIguais == null){
        alert("Todas as notas foram iguais, e o valor é: "+todasSaoIguais.valor);
    }else{
        alert("A sua Maior nota foi: "+maiorNota.valor+"\n e a sua menor nota foi "+menorNota.valor);
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
