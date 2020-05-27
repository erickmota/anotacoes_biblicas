<?php

$img = $_FILES["imagem"];

include "../classes/verificaUsuario.class.php";

$classeApagar = new usuario();

$classeApagar->enviarImagem($img);

header("Location: ../configuracoes");

?>