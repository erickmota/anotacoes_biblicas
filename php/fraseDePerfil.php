<?php

include '../classes/usuarios.class.php';
$classeUsuario = new usuarios();

$texto = $_POST["texto"];

$classeUsuario->idUsuario = $_COOKIE["id_usuario"];

$classeUsuario->alteraFrasePerfil($texto);

echo "<script>window.alert('Frase de perfil alterada com sucesso!');window.location='../configuracoes'</script>";

?>