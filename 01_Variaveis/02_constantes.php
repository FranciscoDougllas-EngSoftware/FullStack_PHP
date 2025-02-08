<?php 

//Definindo uma constante
define("Nome", "Francisco");
echo Nome;

//Definindo uma constante com array
define("Times", ["Flamengo", "Vasco", "Botafogo", "Fluminense"]);
echo Times[2];

//Outra forma de definir uma constante
const Times2 = ["Flamengo", "Vasco", "Botafogo", "Fluminense"];
echo Times2[3];