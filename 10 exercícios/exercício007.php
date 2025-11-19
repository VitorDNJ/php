<?php
// Exercício 07: criando um script PHP que armazena um array

$array = array('A','B', 'C', 'D', 'E'); //criando o array

foreach($array as $valor){              //função foreach pega os dados do array e passa para variavel $valor
print '<br>'.$valor;          // script rodou 5 vezes e pulou uma linha
} 
?>