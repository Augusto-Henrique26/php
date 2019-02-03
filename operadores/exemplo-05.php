<?php 

  
    function maior(){
        $a = 50;
        $b = 35;
        var_dump($a <=> $b);
    }

    function iguais(){
        $a = 50;
        $b = 50;
        var_dump($a <=> $b);
    }

    function menor(){
        $a = 35;
        $b = 50;
        var_dump($a <=> $b);
    }

    echo "A é maior, resulta 1 ";
    maior();
    echo"<br>";
    echo"<br>";

    echo "A e B são iguais, resulta 0 ";
    iguais();
    echo"<br>";
    echo"<br>";
    
    echo "A é menor, resulta -1, logo B é o maior ";
    menor();
    echo"<br>";
    echo"<br>";

?>