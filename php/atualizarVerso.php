<?php

include "../classes/admin.class.php";

$livro = $_POST["livro"];
$capitulo = $_POST["capitulo"];
$verso = $_POST["verso"];
$versao = $_POST["versao"];
$texto = $_POST["texto"];
$idPassagens = $_POST["idPassagens"];

$classeAdmin = new admin();

$classeAdmin->atualizarVerso($texto, $livro, $capitulo, $verso, $versao);

$classeAdmin->apagarPassagem($idPassagens);

echo "<script>window.alert('Passagem atualizada com sucesso.'); window.location='../admin'</script>";

?>