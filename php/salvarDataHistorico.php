<?php

$nomeData = $_POST["nome_data"];

$idUsuario = $_COOKIE["id_usuario"];

$data = $_POST["data"];

include "../classes/historico.class.php";

$classeHistorico = new historico();

$classeHistorico->data = $data;

$classeHistorico->idUsuario = $idUsuario;

$classeHistorico->salvarDataHistorico($nomeData);

header("Location: ../historico/$data");

?>