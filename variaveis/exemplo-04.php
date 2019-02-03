<?php 

    $nome = "Augusto";

    function teste(){
        global $nome;
        echo $nome;
    }

    /*Embora trata-se de 2 variáveis de mesmo nome , para o php
    a questão da globalidade dos escopos de variáveis não afeta 
    o resultado, pois uma variavel é global a outra é local, portanto, pertnce
    única e exclusivamente a function test2();
     */
    function teste2(){
        $nome = "Henrique"
        echo $nome . " Agora no teste 2";
    }

    teste();
    teste2();

?>