<?php

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cSenha = $_POST["cSenha"];

include '../classes/cadastrar.class.php';

$classeCadastrar = new cadastrar();

include '../classes/verificaexistenciabd.class.php';

$classeExistencia = new verificaExistenciaBd();

if($classeExistencia->verificaUsuario($nome) == TRUE){
    
    echo "<script>window.alert('Já existe alguém com esse nome, escolha outro!'); window.location='../cadastro'</script>";
    
}else{
    
    $classeCadastrar->nome = $nome;
    $classeCadastrar->email = $email;
    $classeCadastrar->senha = $senha;
    $classeCadastrar->cSenha = $cSenha;

    $classeCadastrar->cadastrarUsuario();
    
}

?>