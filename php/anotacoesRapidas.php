<?php

$texto = $_POST["texto"];

date_default_timezone_set('America/Sao_Paulo');

$idUsuario = $_COOKIE["id_usuario"];

$dataAtual = date("Y-m-d H:i:s");

include "../classes/comentarios.class.php";
include "../classes/historico.class.php";

$classeHistorico = new historico();

$classeHistorico->idUsuario = $idUsuario;

$classeHistorico->data = $dataAtual;

$textoHistorico = "Você atualizou a sua caixa de anotações rápidas";

$classeHistorico->inserirHistorico($textoHistorico, NULL, 0, 0);

$classeComentarios = new comentarios();

$classeComentarios->anotacoesRapidas($texto);

?>