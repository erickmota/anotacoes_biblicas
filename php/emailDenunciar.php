<?php

include "../classes/email.class.php";

$classeEmail = new email();

$classeEmail->texto = "<p>Um usuário de email: ".$_POST["emailOrigem"]." denunciou o perfil: <b>".$_POST["perfil"]."</b></p>"
        . "<p>Mensagem do usuários: ".$_POST["texto"]." </p>";
$classeEmail->assunto = "Denuncia de Perfil";
$classeEmail->emailDestino = "contato@anotacoesbiblicas.com";
$classeEmail->emailOrigem = $_POST["emailOrigem"];

$classeEmail->mandarEmail();

echo "<script>window.alert('Sua denúncia foi enviada com sucesso, iremos avaliar. Obrigado!'); window.location='../perfil/".$_POST["perfil"]."'</script>";

?>