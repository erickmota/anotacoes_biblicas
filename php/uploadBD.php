<?php

$versao = $_POST["versao"];
$idLivro = $_POST["idlivro"];
$capitulo = $_POST["capitulo"];
$texto = $_POST["texto"];

include "../classes/uploadBD.class.php";

$classeBD = new inserirBDc();

$classeBD->versao = $versao;
$classeBD->idLivro = $idLivro;
$classeBD->capitulo = $capitulo;
$classeBD->texto = $texto;

$classeBD->inserirBD();

?>