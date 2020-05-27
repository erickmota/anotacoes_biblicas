<?php

$senhaAntiga = $_POST["senhaAntiga"];
$novaSenha1 = $_POST["novaSenha1"];
$novaSenha2 = $_POST["novaSenha2"];

$idUsuario = $_COOKIE["id_usuario"];

include '../classes/verificaUsuario.class.php';

$classeUsuario = new usuario();

if($senhaAntiga != $classeUsuario->retornaSenha($idUsuario)){
    
    die("<script>alert ('Senha atual não confere.');history.back();</script>");
    
}

if($novaSenha1 != $novaSenha2){
    
    die("<script>alert ('Senha e nova senha não confere.');history.back();</script>");
    
}

$classeUsuario->editarSenha($novaSenha1, $idUsuario);

echo "<script>alert ('Senha alterada com sucesso!');history.back();</script>";

?>