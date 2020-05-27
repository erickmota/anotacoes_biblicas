<?php

include "../classes/verificaUsuario.class.php";

$classeUsuario = new usuario();

$img = $classeUsuario->retornaImagem();

$image_file = "../img/$img";
$targetfile = "../img/$img";
 
// algulo em que a foto sera girada
$degrees = -90;
 
$source = imagecreatefromjpeg($image_file);
 
$rotate = imagerotate($source, $degrees, 0);
 
imagejpeg($rotate, $targetfile);

header("Location: ../configuracoes");

//echo "<script>window.location='../configuracoes'</script>";

?>
