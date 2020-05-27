<?php

date_default_timezone_set('America/Sao_Paulo');

$busca = urlencode($_GET["busca"]);
$versao = $_GET["versao"];

//Dados historico
if(isset($_COOKIE["id_usuario"])) {

    $dataAtual = date("Y-m-d H:i:s");

    include "../classes/historico.class.php";

    $classeHistorico = new historico();
    
    $classeHistorico->idUsuario = $_COOKIE["id_usuario"];

    $classeHistorico->data = $dataAtual;
    
    $buscaDecode = urldecode($busca);
    
    $texto = "Você pesquisou por: $buscaDecode";
            
    $classeHistorico->inserirHistorico($texto, NULL, 0, 0);

}

//***********

if($versao == "acf" || $versao == "aa" || $versao == "nvi"){
    
    echo "<script>window.location='../busca/$busca/todos/$versao/1'</script>";
    
}else{
    
    echo "<script>window.location='../busca/$busca/todos/acf/1'</script>";
    
}

?>
