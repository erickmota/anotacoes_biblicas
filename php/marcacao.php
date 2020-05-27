<?php

$posicao = $_GET["posicao"];

$livro = $_GET["livro"];

$capitulo = $_GET["capitulo"];

include '../classes/marcacao.class.php';

$classeMarcacao = new marcacao();

$classeMarcacao->posicao = $posicao;

$classeMarcacao->livro = $livro;

$classeMarcacao->capitulo = $capitulo;

$classeMarcacao->cadastrarMarcacao();

?>
