<?php
    session_start();

    session_destroy();
    
    header("location: login.php?logout=<div class='alert alert-success' role='alert'><b>Parabéns!</b> Logout efetuado com sucesso.</div>");
?>