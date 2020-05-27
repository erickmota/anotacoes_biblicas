<?php

include "../classes/email.class.php";

$classeEmail = new email();

$classeEmail->texto = $_POST["texto"];
$classeEmail->assunto = $_POST["assunto"];
$classeEmail->emailDestino = $_POST["email"];
$classeEmail->emailOrigem = "contato@anotacoesbiblicas.com";

$classeEmail->mandarEmail();

echo "<script>alert ('Seu e-mail foi enviado com sucesso.');window.location='../admin'</script>";

?>