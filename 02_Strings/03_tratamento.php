<?php
//Tratamento de Springs

$string1 = "     Eu sou uma String      ";
$string2 = "eu sou uma string";
$string3 = "EU SOU UMA STRING";
$string4 = "Eu Sou Uma String     ";
$codigo1 = "2";
$numero  = "Abc";

//Tratamento de Strings
#lower - Transforma todas as letras em minusculas
echo strtolower($string1);
echo "<br>";
echo strtoupper($string2);
echo "<br>";

#upper - Transforma todas as letras em maiusculas
echo ($string3);
echo "<br>";
echo strtoupper(($string3));
echo "<br>";

//As Primeiras Letras de Todas as Palavras em Maiusculas
echo ucfirst($string1);
echo "<br>";
echo ucfirst($string2);
echo "<br>";


//Caso a String ja Seja toda em Maiuscula, primeiro Transformo em Minuscula e Depois utilizo o Capitalize
echo "<br>";
echo "<br>";
echo "<br>";

$stringTeste = "TEXTO TODO EM MAIUSCULO";
echo $stringTeste;
echo "<br>";

#transformando em Minuscula
echo strtolower($stringTeste)."<br>";
echo ucwords($stringTeste)."<br>";

//Fazendo Tudo de Uma unica vez
$teste = "sua string aqui";
echo ucwords(strtolower($teste));

