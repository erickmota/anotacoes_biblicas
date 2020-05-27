<?php

include "../classes/comentarios.class.php";
include "../classes/email.class.php";

$classeComentarios = new comentarios();
$classeEmail = new email();

$livro = $_GET["livro"];
$capitulo = $_GET["capitulo"];
$verso = $_GET["verso"];
$versao = $_GET["versao"];

if($versao == "aa"){
    
    $versao2 = 1;
    
}elseif($versao == "acf"){
    
    $versao2 = 2;
    
}elseif($versao == "nvi"){
    
    $versao2 = 3;
    
}

$classeEmail->texto = "Um usuário sinalizou <b>$livro $capitulo:$verso $versao</b>";

$classeEmail->assunto = "Verso sinalizado";

$classeEmail->emailDestino = "contato@anotacoesbiblicas.com";

$classeEmail->emailOrigem = "contato@anotacoesbiblicas.com";

$classeEmail->mandarEmail();

$classeComentarios->sinalizarPassagem($livro, $capitulo, $verso, $versao2);

//echo "$livro - $capitulo - $verso - $versao";

?>