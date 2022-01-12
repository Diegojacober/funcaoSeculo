<?php

function seculoAno($year){
    if($year <= 0){
        return 'O ano deve ser maior que 0';
    }
    $array = str_split($year);
    $tamanho = count($array);
    
    if($tamanho == 3){
        $primeirosDigitos = $array[0];
        return 'O século é o ' .$primeirosDigitos + 1;
    }
    elseif($array[3] == 0 && $array[2] == 0){
        return "O século é o $array[0]$array[1]";
    }
    else if($tamanho == 4){
      $primeirosDigitos = $array[0].$array[1];
        return 'O século é o ' .$primeirosDigitos + 1;
    }
  
}


$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_NUMBER_INT);

if (isset($ano)) {
    if ($ano) {
      echo  seculoAno($ano);
    } else {
        echo 'Formato não permitido';
    }
} else {
    echo '<h1>Escreva o Ano e descubra qual o século</h1>';
}


?>
<!-- formulário para enviar o ano desejado -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função adivinha Século</title>
</head>

<body>
    <form method="post">
        <hr>
        <label for="ano">Ano:</label><br>
        <input type="text" name="ano"><br><br>
        <button type="submit">Enviar</button>
        <hr>
    </form>
</body>

</html>