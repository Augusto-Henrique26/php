<?php
    //manipulando Strings

    $frase = "A repetição é mãe da retenção";
    $palavra = "mãe";

    $q = strpos($frase, $palavra);
    echo"Posição da palavra procurada na String";
    echo"<br>";
    var_dump($q);
    echo"<br>";
    echo"<br>";

    $texto = substr($frase, 0, $q);
   echo"Procurando por trechos de palavra do inicio até a posição definida a cima";
   echo"<br>";
   var_dump($texto);
   echo"<br>";
   echo"<br>";

   $texto2 = substr($frase,$q + strlen($palavra), strlen($frase));
    var_dump($texto2);
?>