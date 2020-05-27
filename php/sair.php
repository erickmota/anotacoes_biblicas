<?php

if(!isset($_COOKIE["nome_usuario"]) && !isset($_COOKIE["email_usuario"]) && !isset($_COOKIE["id_usuario"])) {
    
    echo "<script>window.location='../index.php'</script>";
    
}

    include '../classes/verificaUsuario.class.php';

    $usuarioClass = new usuario();

    $usuarioClass->sairLogin();

?>