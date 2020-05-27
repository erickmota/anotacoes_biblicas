<?php

include "../classes/notificacao.class.php";
$classeNotificacao = new notificacao();

include "../classes/exibirCapitulo.class.php";
$classeExibirCapitulo = new exibirCapitulo();

$idNoti = $_GET["idNoti"];
$usuario = $_GET["usuario"];

$classeNotificacao->id_notificacao = $idNoti;

foreach ($classeNotificacao->retornaDadosNotificacaoPeloId() as $arrNotificacao){
    
    if($arrNotificacao["id_comentario"] == 0){
        
        echo "<script>window.location='../perfil/$usuario'</script>";
        
    }else{
        
        foreach ($classeNotificacao->retornaDadosComentarioPeloId($arrNotificacao["id_comentario"]) as $arrNotComentario){
            
            echo "<script>window.location='../{$arrNotComentario['livro']}/{$arrNotComentario['capitulo']}/{$arrNotComentario['numero_versiculo']}/{$classeExibirCapitulo->retornaVersao()}'</script>";
            
        }
        
    }
    
}

$classeNotificacao->apagarNotificacao();

?>