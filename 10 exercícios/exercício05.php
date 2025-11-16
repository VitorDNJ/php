<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05</title>
</head>
<body>
    <h4>Exercício 05: Escreva um scrpt PHP que imprima o dia da semana de uma data.</h4>
    <?php 
        $data = "16-11-2025";
        $timestamp = strtotime($data); // calcula o número de segundos desde 01-01-1970

        if($timestamp === false){
            print "Data inválida.";
        } else {
        $dia_semana = date ("l" , $timestamp);
        print "O dia da semana para a data $data é $dia_semana";
        }

    ?>
</body>
</html>

