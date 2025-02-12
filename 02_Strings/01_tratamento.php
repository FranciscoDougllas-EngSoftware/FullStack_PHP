<?php
//Tratamento de Springs

$string1 = "     Eu sou uma String      ";
$string2 = "eu sou uma string";
$string3 = "EU SOU UMA STRING";
$string4 = "Eu Sou Uma String     ";
$codigo1 = "2";
$numero  = "Abc";

//Eliminando os espaços em Branco com trim
echo "$string1 \n";
echo "<br>";
echo trim($string1);

//Opcoes de Remoção de Espaços
$trim = trim($string1); //Remove todos os espacos
$ltrim = ltrim($string1); //Remove os espacos a esquerda
$rtrim = rtrim($string1); //Remove os espacos a direita
echo "<br>";
echo "$trim \n";
echo "$ltrim \n";
echo "$rtrim \n";