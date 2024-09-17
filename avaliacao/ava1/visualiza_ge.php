<?php

include 'autenticao.php';

$usando = fopen("ge.txt", "r");
while (!feof($usando)) {
        $linha = fgets($usando);
        echo $linha ."<br>";
    }
fclose($usando);

?>