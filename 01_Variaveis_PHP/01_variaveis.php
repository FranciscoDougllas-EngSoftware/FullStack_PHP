<?php 
//Declaracao de variaveis
$nome = "Fulano"; //String
$idade = 18; //Int
$altura = 1.75; //Float
$ativo = true; //Boolean

//Concatenacao as melhores formas
echo "Ola, meu nome e $nome, tenho $idade anos e $altura de altura";
echo "<br>";
echo "Ola eu sou o $nome e tenho $idade anos";

echo "<br>";

echo $nome;

echo "<br>";

//Concatenando  essa e uma forma pessima
echo $nome." tem ".$idade." anos ";