<?php
//Tratamento de Springs

$string1 = "     Eu sou uma String      ";
$string2 = "eu sou uma string";
$string3 = "EU SOU UMA STRING";
$string4 = "Eu Sou Uma String     ";
$codigo1 = "2";
$numero  = "Abc";

//Outras Formas de Trata
#strlem - Mostra o tamanho da string
echo strlen($string2);
echo "<br>";
echo strlen($string3);
echo "<br>";


#substr - Retorna uma parte de uma string
echo substr($string2, 0, 4);
echo "<br>";
echo substr($string2, 4, 12);
echo "<br>";