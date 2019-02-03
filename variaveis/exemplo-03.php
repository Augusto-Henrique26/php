<?php 
    //Variáveis super Globais

    $nome =$_GET["a"];
   // var_dump($nome); // usando o var_dump para ver o tipo de valor
    //poderia ter usado sem problema o echo.

    //pegando o ip do usuário
    $ip = $_SERVER["REMOTE_ADDR"];
    echo  $ip;

    echo("<br>");

    $local = $_SERVER["SCRIPT_NAME"];
    echo $local; 


?>