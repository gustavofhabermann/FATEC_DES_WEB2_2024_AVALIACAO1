<?php

session_start();

if(isset($_SESSION["coordenador"]) && $_SESSION["coordenador"] === true){  
}else{
    header("location: index.php");
    exit;
}

if(isset($_SESSION["tecnico"]) && $_SESSION["tecnico"] === true){  
}else{
    header("location: inicio.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
        h1{padding: 1%}
    </style>
</head>
<body>
    <h1>Cadastro</h1>

    <form action="registro.php" method="post">
            <div class="wrapper">
                <div class="form-group">
                    <label for="Laboratorios">Laboratório</label>
                    <select id="Lab" name="op1">
                        <option value="Lab_1">Lab 1</option>
                        <option value="Lab_2">Lab 2</option>
                        <option value="Lab_3">Lab 3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Prazo Limite</label>
                    <input type="text" name="Prazo" class="form-control" value="dd/mm/aaaa">
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label>Solicitação</label>
                    <input type="text" name="solicitacao" class="form-control">
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                    <label for="Cursos">Cursos Atendidos</label>
                    <select id="Curso" name="op2">
                        <option value="dsm">DSM</option>
                        <option value="ge">GE</option>
                    </select>
                    <span class="help-block"></span>
                </div>
                <br>

                <button class="btn btn-primary">Enviar</button>
        </form>
        
    </div>
</body>
</html>