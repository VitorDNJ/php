<?php 
// Exercício 04: verificando se o número é par ou ímpar

function verificarPArouImpa($n){
if($n %2 ==0){  
return "O número $n é PAR";
}else{
return"O número $n é IMPAR";
}
}

$numero = 15;
$resultado = verificarPArouImpa($numero);

print $resultado;

?>