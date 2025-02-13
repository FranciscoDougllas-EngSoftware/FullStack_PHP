<?php
//Arrays

$nomes = ["Francisco", "Fulano", "Beltrano", "Cristiano"];
print_r($nomes)."<br>";

echo"<br>";
//Arrays Associativos
$frutas = [
    "a" => "Banana",
    "b" => "Manga",
    "c" => 'Abacate',
    'd' => 'Morango',
];

print_r($frutas).'<br>';

//Acessando o Array
echo $nomes[0]."<br>";
echo $nomes[1]."<br>";
echo $nomes[9]."<br>";