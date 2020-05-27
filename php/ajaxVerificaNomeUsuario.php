<?php

include '../classes/verificaexistenciabd.class.php';

$classeExistencia = new verificaExistenciaBd();

$nome = $_POST["nome"];

if($classeExistencia->verificaUsuario($nome) == true){
    
?>

<script type="text/javascript">

var input = document.getElementById("campoNome");
var labelCampo = document.getElementById("labelCampoNome");

if(input.value !== ""){
    
    input.classList.add("is-invalid");
    labelCampo.classList.add("d-none");
    labelCampo.classList.remove("d-block");
    
}else{
    
    input.classList.remove("is-invalid");
    labelCampo.classList.add("d-block");
    labelCampo.classList.remove("d-none");
    
}

</script>

<?php
    
}else{
    
?>

<script type="text/javascript">

var input = document.getElementById("campoNome");
var labelCampo = document.getElementById("labelCampoNome");

if(input.value !== ""){
    
    input.classList.remove("is-invalid");
    labelCampo.classList.add("d-block");
    labelCampo.classList.remove("d-none");
    
}else{
    
    input.classList.remove("is-invalid");
    labelCampo.classList.add("d-block");
    labelCampo.classList.remove("d-none");
    
}

</script>

<?php
    
}

?>