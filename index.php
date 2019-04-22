<?php
    #camelCase
    $anoNascimento = 1998;
    $nomeCompleto = "";
    $nome1 = 'Luiza';
    $sobrenome = 'Avelino';
    $nomeCompleto = $nome1 ." ". $sobrenome;
    echo $nomeCompleto;
    exit;
    //Comentário
    /*
        Multiplo comentario
    */

    echo $nome1;

    #"Apagar" a váriavel da memória
    #unset($nome1);

    echo "<br>";
    echo $nome1;

    #verificar se está definido

    if (isset($nome1)) {
        echo $nome1;
    }


?>