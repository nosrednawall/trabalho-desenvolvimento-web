

/**
2.Crie um script que calcule a média de 4 valores informados pelo usuário, o resultado deve ter no
máximo 2 casas decimais.
 */

//primeiro captura os valores do usuário
var valor1 = parseFloat(prompt("Informe qual é o primeiro valor?"));
var valor2 = parseFloat(prompt("Informe qual é o segundo valor?"));
var valor3 = parseFloat(prompt("Informe qual é o terceiro valor?"));
var valor4 = parseFloat(prompt("Informe qual é o quarto valor?"));

//depois efetua a media
var media = (valor1 + valor2 + valor3 + valor4)/4;

//depois limita as casas após a virgula para 2
media = parseFloat(media).toFixed(2);

//imprime o resultado
alert("O resultado da média foi de "+media);
