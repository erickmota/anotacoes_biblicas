<?php

if(!isset($_COOKIE["nome_usuario"]) && !isset($_COOKIE["email_usuario"]) && !isset($_COOKIE["id_usuario"])) {
    
    echo "<script>window.location='../index.php'</script>";
    
}

$texto = $_POST["texto"];

$usuario = $_COOKIE["nome_usuario"];

include "../classes/email.class.php";

$classeEmail = new email();

$classeEmail->texto = "<b>Mensagem:</b> {$texto}<br><br>"
. "<b>Usuário:</b> {$usuario}<br>";

$classeEmail->assunto = "Erro Anotações Bíblicas";

$classeEmail->emailDestino = "contato@anotacoesbiblicas.com";

$classeEmail->emailOrigem = $_COOKIE["email_usuario"];

$classeEmail->mandarEmail();

echo "<script>alert ('Obrigado, iremos avaliar seu feedback !');window.location='../configuracoes'</script>";

?>