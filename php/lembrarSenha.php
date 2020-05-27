<?php

include "../classes/cadastrar.class.php";

$email = $_POST["email"];

$classeLembrar = new cadastrar();

$classeLembrar->lembrarSenha($email);

?>