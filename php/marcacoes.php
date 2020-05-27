<?php

if(!isset($_COOKIE["nome_usuario"]) && !isset($_COOKIE["email_usuario"]) && !isset($_COOKIE["id_usuario"])) {
    
    echo "<script>window.location='../index.php'</script>";
    
}

date_default_timezone_set('America/Sao_Paulo');

include '../classes/marcacoes.class.php';
include "../classes/historico.class.php";

$marcacoesClass = new marcacoes();
$classeHistorico = new historico();

//Classe para histórico

$dataAtual = date("Y-m-d H:i:s");

$classeHistorico->idUsuario = $_GET["idusuario"];

$classeHistorico->data = $dataAtual;

//Classe para Marcação
$marcacoesClass->idUsuario = $_GET["idusuario"];

$marcacoesClass->livro = $_GET["livro"];

$marcacoesClass->capitulo = $_GET["capitulo"];

$marcacoesClass->versiculo = $_GET["versiculo"];

$marcacoesClass->cor = $_GET["cor"];

$versao = $_GET["versao"];

$livro = $_GET["livro"];

$capitulo = $_GET["capitulo"];

$versiculo = $_GET["versiculo"];

//Verificação para o histórico
if($_GET["cor"] != "apagar"){
    
    switch ($_GET["cor"]){
        
        //Amarelo
        case "fffe80":
            
            $texto = "Você efetuou uma marcação na cor amarelo em $livro $capitulo:$versiculo";
            
            $classeHistorico->inserirHistorico($texto, $livro, $capitulo, $versiculo);
            
            break;
        
        //Verde
        case "9bff93":
            
            $texto = "Você efetuou uma marcação na cor verde em $livro $capitulo:$versiculo";
            
            $classeHistorico->inserirHistorico($texto, $livro, $capitulo, $versiculo);
            
            break;
        
        //Laranja
        case "ffd686":
            
            $texto = "Você efetuou uma marcação na cor laranja em $livro $capitulo:$versiculo";
            
            $classeHistorico->inserirHistorico($texto, $livro, $capitulo, $versiculo);
            
            break;
        
        //Azul
        case "7af7ff":
            
            $texto = "Você efetuou uma marcação na cor azul em $livro $capitulo:$versiculo";
            
            $classeHistorico->inserirHistorico($texto, $livro, $capitulo, $versiculo);
            
            break;
        
        //Roxo
        case "eeb5ff":
            
            $texto = "Você efetuou uma marcação na cor roxo em $livro $capitulo:$versiculo";
            
            $classeHistorico->inserirHistorico($texto, $livro, $capitulo, $versiculo);
            
            break;
        
    }
    
}else{
    
    
    
}

if($_GET["cor"] == "apagar") {
    
    $marcacoesClass->apagarMarcacao($versao);
    
}else{
    
    $marcacoesClass->cadastrarMarcacao($versao);
    
}

?>