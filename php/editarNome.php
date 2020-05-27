<?php

$novoNome = $_POST["nome"];

$idUsuario = $_COOKIE["id_usuario"];

include '../classes/verificaUsuario.class.php';

include '../classes/verificaexistenciabd.class.php';

$classeExistencia = new verificaExistenciaBd();

$classeUsuario = new usuario();

if($classeExistencia->verificaUsuario($novoNome) == TRUE){
    
    echo "<script>window.alert('Já existe alguém com esse nome, por favor, escolha outro!'); window.location='../configuracoes'</script>";
    
}else{
    
    $classeUsuario->editarNome($idUsuario, $novoNome);

    echo "<script>alert ('Nome alterado com sucesso! Para salvar suas alterações precisamos que você se logue novamente no sistema!')</script>";

    $classeUsuario->sairLogin();
    
}



?>