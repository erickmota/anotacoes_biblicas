<?php

include "../classes/admin.class.php";

$id = $_GET["id"];

$classeAdmin = new admin();

$classeAdmin->apagarPassagem($id);

echo "<script>window.alert('Passagem ignorada com sucesso.'); window.location='../admin'</script>";

?>