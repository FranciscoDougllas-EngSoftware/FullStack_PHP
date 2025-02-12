<?php
/**
 * Definição de constantes em PHP
 */

// Definição de uma constante com o nome "Sexo" e valor "Masculino"
define("Sexo", "Masculino");

// Exibição do valor da constante "Sexo"
echo Sexo;

// Constantes mágicas em PHP
// Essas constantes são pré-definidas pelo PHP e fornecem informações sobre o script atual

// Exibição da linha atual do script
echo "<br>";
echo "A Linha atual e ".__LINE__;

// Exibição do arquivo atual do script
echo "<br> O arquivo atual e ".__LINE__;

// Exibição do caminho do arquivo atual do script
echo "<br> O Caminho do Arquivo atual e ".__FILE__;

// Exibição do diretório do arquivo atual do script
echo "<br> O Diretorio do arquivo atual e ".__DIR__;