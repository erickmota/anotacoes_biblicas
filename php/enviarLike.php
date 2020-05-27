<?php

include '../classes/comentario2.class.php';
$classeComentario2 = new comentario2();

include '../classes/notificacao.class.php';
$classeNotificacao = new notificacao();

$idUsuario = $_POST["usuario"];
$id_usuario_anotacao = $_POST["id_usuario_anotacao"];
$idComentario = $_POST["comentario"];

$classeComentario2->idUsuario = $idUsuario;
$classeComentario2->idComentario = $idComentario;

if($classeComentario2->verificaLikeJaComentado() == true){
    
    $classeComentario2->removeLike();
    
}else{
    
    $classeNotificacao->id_usuarios = $_COOKIE["id_usuario"];
    $classeNotificacao->id_usuarios_receber = $id_usuario_anotacao;
    $classeNotificacao->texto = "curtiu seu comentário";
    $classeNotificacao->data_notificacao = date("Y-m-d");
    $classeNotificacao->id_comentario = $idComentario;
    
    if($classeNotificacao->verificarExistenciaNotificacao() == false){
        
        $classeNotificacao->inserirNotificacao();
        
    }
    
    $classeComentario2->insereLike();
    
}

?>

<?php echo $classeComentario2->retornaQtdLike(); ?>