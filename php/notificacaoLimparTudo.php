<?php

include "../classes/notificacao.class.php";
$classeNotificacao = new notificacao();

$classeNotificacao->id_usuarios_receber = $_COOKIE["id_usuario"];

$classeNotificacao->apagarNotificacaoPeloUsuario();

echo "<script>window.location='../'</script>";

?>