<?php

if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
    
    include "./classes/verificaUsuario.class.php";

    $classeUsuario = new usuario();

    if($classeUsuario->consultarCookie() == false){
        
        setcookie("nome_usuario", null, -1, "/");
        setcookie("email_usuario", null, -1, "/");
        setcookie("id_usuario", null, -1, "/");

        echo "<script>window.alert('Algum dado foi alterado, ou essa conta não existe mais em nossa base de dados. Você será redirecionado, para a página principal!'); window.location='./'</script>";

    }
    
}

?>