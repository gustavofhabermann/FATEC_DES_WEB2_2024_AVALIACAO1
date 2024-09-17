<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['usuario'] == 'coordenacao' and $_POST['senha'] == 'coordenacao'){
        $_SESSION["coordenador"] = TRUE;
        $_SESSION["usuario"] = 'Coordenacao';
         header("location: inicio.php");
    } else if ($_POST['usuario'] == 'tecnicos' and $_POST['senha'] == 'tecnicos'){
            $_SESSION["tecnico"] = TRUE;
            $_SESSION["usuario"] = 'Tecnicos';
             header("location: inicio.php");
    } else {
        $_SESSION['coordenador'] = FALSE;
        $_SESSION['tecnico'] = FALSE;
    }
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Acessar</h2>
        <p>Favor inserir login e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="usuario" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="senha" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
            <div class="form-group">
                <a href="visualizar.php" class="btn btn-primary">Visualizar Cadastro</a>
            </div>
        </form>
    </div>
</body>
</html>