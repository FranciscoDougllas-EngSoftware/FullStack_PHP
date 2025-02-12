<?php 

//Definindo uma constante
define("NOME", "Francisco");
echo NOME;

//NOME = "Silva";
echo NOME;

echo "<br>";

//Definindo uma constante com array
define("Times", ["Flamengo", "Vasco", "Botafogo", "Fluminense"]);
echo Times[2];

//Outra forma de definir uma constante
const Times2 = ["Flamengo", "Vasco", "Botafogo", "Fluminense"];
echo Times2[3];