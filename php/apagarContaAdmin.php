<?php

$id = $_GET["id"];

include "../classes/apagarConta.class.php";

$classeApagar = new apagarConta();

$classeApagar->apagarContaAdmin($id);

?>