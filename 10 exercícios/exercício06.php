<?php
// Exercício 03: um script PHP que imprime o nome do mês de uma data

//função com o parametro data
function nomesTraduzidos ($data){
// Array associativo
$traducao = array(
'January' => 'Janeiro',
'February' => 'Fevereiro',
'March' => 'Março',
'April' => 'Abril',
'May' => 'Maio',
'June' => 'Junho',
'July' => 'Julho',
'August' => 'Agosto',
'September' => 'Setembro',
'October' => 'Outubro',
'November' => 'Novembro',
'December' => 'Dezembro',
);
$nome_ingles = date('F' , strtotime($data)); // trouxe os nomes em inglês 
return $traducao[$nome_ingles];
}
$data = "18-11-2025";

$nome_portugues = nomesTraduzidos($data);  // chamando a function para trazer e mostrar os nomes traduzidos
print "O nome do mês para a data $data é: $nome_portugues";
?>