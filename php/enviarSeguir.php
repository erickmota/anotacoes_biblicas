<?php

include '../classes/usuarios.class.php';
$classeUsuarios = new usuarios();

include '../classes/notificacao.class.php';
$classeNotificacao = new notificacao();

$idSeguidor = $_GET["seguidor"];
$idSeguindo = $_GET["seguindo"];
$nomePerfil = $_GET["nome"];

$classeUsuarios->idUsuario = $idSeguidor;

if($classeUsuarios->verificaSeguirJaSeguindo($idSeguindo) == true){
    
    $classeUsuarios->removeSeguir($idSeguindo);
    
}else{
    
    $classeNotificacao->id_usuarios = $_COOKIE["id_usuario"];
    $classeNotificacao->id_usuarios_receber = $idSeguindo;
    $classeNotificacao->texto = "começou a seguir você";
    $classeNotificacao->data_notificacao = date("Y-m-d");
    $classeNotificacao->id_comentario = 0;
    
    if($classeNotificacao->verificarExistenciaNotificacao() == false){
        
        $classeNotificacao->inserirNotificacao();
        
    }
    
    $classeUsuarios->insereSeguir($idSeguindo);
    
}

echo "<script>window.location='../perfil/$nomePerfil'</script>";

?>