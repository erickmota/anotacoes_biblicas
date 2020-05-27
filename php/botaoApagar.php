<?php

if(!isset($_COOKIE["nome_usuario"]) && !isset($_COOKIE["email_usuario"]) && !isset($_COOKIE["id_usuario"])) {
    
    echo "<script>window.location='../index.php'</script>";
    
}

include '../classes/comentarios.class.php';

$comentarioClass = new comentarios();

$comentarioClass->idUsuario = $_GET["idusuario"];

$comentarioClass->livro = $_GET["livro"];

$comentarioClass->capitulo = $_GET["capitulo"];

$comentarioClass->numeroVersiculo = $_GET["versiculo"];

$comentarioClass->apagarComentario($_GET["versao"]);



?>