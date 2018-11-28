

/**
6.Receba o nome completo do usuário e imprima na tela o número total de letras de seu nome.
 */

//primeiro captura os valores do usuário
var nome = prompt("Qual é o seu nome completo ?");

//remove os espacos em branco
nome = nome.replace( / /g, '');

//usei de debug
console.log(nome);


//imprime na tela
document.write("Seu nome completo possui "+ nome.length);
document.write(" caracteres");

// anderson jose de souza inacio
// 123456789012345678901234567890
