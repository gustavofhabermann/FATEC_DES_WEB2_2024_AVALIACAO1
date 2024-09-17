<?php

include 'autenticao.php';

$usando = fopen("dsm.txt", "r");
while (!feof($usando)) {
        $linha = fgets($usando);
        echo $linha ."<br>";
    }
fclose($usando);

?>