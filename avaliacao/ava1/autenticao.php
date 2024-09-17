<?php

session_start();

if(isset($_SESSION["coordenador"]) && $_SESSION["coordenador"] === true){  
} 
else if(isset($_SESSION["tecnico"]) && $_SESSION["tecnico"] === true){
} 
else{
    header("location: index.php");
    exit;
}

?>