<?php

include '../classes/verificaUsuario.class.php';

$email = $_POST["email"];
$senha = $_POST["senha"];

$log = new usuario();

$log->verificaAdmin($email, $senha);

?>