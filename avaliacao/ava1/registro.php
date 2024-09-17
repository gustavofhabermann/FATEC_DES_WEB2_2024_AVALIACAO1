<?php

session_start();

if(isset($_SESSION["coordenador"]) && $_SESSION["coordenador"] === true){  
}else{
    header("location: index.php");
    exit;
}

if($_POST['op2'] == 'dsm'){

    $nome_arq = "dsm.txt";

    if (!file_exists("dsm.txt")){
        $usando = fopen("dsm.txt", "w");
    } else {
        $usando = fopen("dsm.txt", "a");
    }

    fwrite($usando, $_POST['op1'] . '| ');
    fwrite($usando, $_POST['Prazo'] . '|');
    fwrite($usando, $_POST['solicitacao'] . '|');
    fwrite($usando, $_POST['op2'] . "\n");
    fflush($usando);
    fclose($usando);

    header("location: cadastro.php");
} else if ($_POST['op2'] == 'ge'){

    $nome_arq = "ge.txt";

    if (!file_exists("ge.txt")){
       $usando = fopen("ge.txt", "w");
    } else {
       $usando = fopen("ge.txt", "a");
    }

    fwrite($usando, $_POST['op1'] . '| ');
    fwrite($usando, $_POST['Prazo'] . '|');
    fwrite($usando, $_POST['solicitacao'] . '|');
    fwrite($usando, $_POST['op2'] . "\n");
    fflush($usando);
    fclose($usando);

    header("location: cadastro.php");
}


?>