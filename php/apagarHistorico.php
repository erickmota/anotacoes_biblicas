<?php

$idHistorico = $_GET["idHistorico"];
$data = $_GET["data"];

include "../classes/historico.class.php";

$classeHistorico = new historico();

$classeHistorico->idHistorico = $idHistorico;

$classeHistorico->apagarHistorico();

header("Location: ../historico/$data");

?>