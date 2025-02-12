<?php
$nome = "Francisco Fulano de Tal"."<br>";

echo $nome;

// Função str_contains
if (str_contains($nome, 'Fulano')) {
    echo "A string contém 'Fulano'.<br>";
} else {
    echo "A string não contém 'Fulano'.<br>";
}

// Função str_starts_with
if (str_starts_with($nome, 'Francisco')) {
    echo "A string começa com 'Francisco'.<br>";
} else {
    echo "A string não começa com 'Francisco'.<br>";
}

// Função str_ends_with
if (str_ends_with($nome, 'de Tal<br>')) {
    echo "A string termina com 'de Tal'.<br>";
} else {
    echo "A string não termina com 'de Tal'.<br>";
}

// Função str_repeat
echo str_repeat($nome, 2);

// Função str_replace
$nome_substituido = str_replace('Fulano', 'Ciclano', $nome);
echo $nome_substituido;

// Função str_contains
if (str_contains($nome_substituido, 'Ciclano')) {
    echo "A string contém 'Ciclano'.<br>";
} else {
    echo "A string não contém 'Ciclano'.<br>";
}

// Função str_ireplace
$nome_ireplace = str_ireplace('ciclano', 'fulano', $nome_substituido);
echo $nome_ireplace;