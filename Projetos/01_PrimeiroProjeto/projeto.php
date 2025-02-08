<?php 

echo "Escreva o seu nome...\n";
$nome = readline('');

echo "Escreva a sua idade...\n";
$idade = intval(readline(''));

echo "Escreva a sua altura...\n";
$altura = floatval(readline(""));

//Identificando o tipo de variavel
echo "O tipo da variavel nome e: ".gettype($nome)."\n";
echo "O tipo da variavel idade e: ".gettype($idade)."\n";

echo "Ola, meu nome e $nome, tenho $idade anos e $altura de altura";
?>