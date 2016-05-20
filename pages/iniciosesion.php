<?php 
    session_start(); 
    $_SESSION["usuario"] = "usuprueba";
    echo $_SESSION["usuario"];
    header('location: ../index.php?contenido=inicio');//volvemos al informe
?>