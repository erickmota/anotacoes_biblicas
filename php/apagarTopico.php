<?php

$topico = $_GET["topico"];
$versao = $_GET["versao"];

include "../classes/anotacoes.class.php";

$classeAnotacoes = new anotacoes();

$classeAnotacoes->apagaTopico("#$topico");

echo "<script>window.location='../anotacoes/todos/$versao/1'</script>";

?>
