<?php

$data = $_GET["data"];

$idUsuario = $_COOKIE["id_usuario"];

include "../classes/historico.class.php";

$classeHistorico = new historico();

$classeHistorico->data = $data;

$classeHistorico->idUsuario = $idUsuario;

$classeHistorico->apagarDataHistorico();

header("Location: ../historico/$data");

?>
