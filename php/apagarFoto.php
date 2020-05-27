<?php

include "../classes/verificaUsuario.class.php";

$classeApagar = new usuario();

$classeApagar->apagarFoto();

header("Location: ../configuracoes");

?>