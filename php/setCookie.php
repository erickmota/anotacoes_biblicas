<?php

    include '../classes/verificaUsuario.class.php';

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $log = new usuario();

    $log->email = $email;
    $log->senha = $senha;
    $log->login();
    
?>