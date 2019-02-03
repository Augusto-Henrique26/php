<?php 

    $nome = "augusto";
    $nome2 = 'mohamed';

    var_dump($nome, $nome2);
    echo"ABC $nome";
    echo'CDF $nome2';

    echo"<br>";
    echo"<br>";

    //texto Maiúculo;
    echo strtoupper($nome);
    echo"<br>";
    echo strtolower($nome2);

    echo"<br>";
    echo ucwords($nome);

    echo"<br>";
    echo ucfirst($nome2);

    echo"<br>";
    echo str_replace("a"," ",$nome2); //procuro por toda letra a na string e peço para que seja
    // substituidas por valores vazio

?>