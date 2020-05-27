<?php

class apagarConta{
    
    public function apagarContaUsuario(){
        
        include 'conexao.class.php';
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "DELETE FROM comentarios WHERE id_usuario='$idUsuario'");
        
        $sql2 = mysqli_query($conn, "DELETE FROM marcacoes WHERE id_usuario='$idUsuario'");
        
        $sql3 = mysqli_query($conn, "DELETE FROM usuarios WHERE id='$idUsuario'");
        
        $sql4 = mysqli_query($conn, "DELETE FROM historico_datas WHERE id_usuario='$idUsuario'");
        
        $sql5 = mysqli_query($conn, "DELETE FROM historico WHERE id_usuario='$idUsuario'");
        
        $sql6 = mysqli_query($conn, "DELETE FROM topicos WHERE id_usuario='$idUsuario'");
        
        $sql6 = mysqli_query($conn, "DELETE FROM likes WHERE id_usuario='$idUsuario'");
        
        $sql7 = mysqli_query($conn, "DELETE FROM seguir WHERE id_seguidor='$idUsuario'");
        
        $sql8 = mysqli_query($conn, "DELETE FROM seguir WHERE id_seguindo='$idUsuario'");
        
        @unlink("../img/".$idUsuario."avatar.jpg");
        
        setcookie("nome_usuario", null, -1, "/");
        setcookie("email_usuario", null, -1, "/");
        setcookie("id_usuario", null, -1, "/");
        
        echo "<script>alert ('Agradecemos por ter usado o Anotações Bíblicas, esperamos ter ver de novo !');window.location='../'</script>";
        
    }
    
    public function apagarContaAdmin($id){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "DELETE FROM comentarios WHERE id_usuario='$id'");
        
        $sql2 = mysqli_query($conn, "DELETE FROM marcacoes WHERE id_usuario='$id'");
        
        $sql3 = mysqli_query($conn, "DELETE FROM usuarios WHERE id='$id'");
        
        $sql4 = mysqli_query($conn, "DELETE FROM historico_datas WHERE id_usuario='$id'");
        
        $sql5 = mysqli_query($conn, "DELETE FROM historico WHERE id_usuario='$id'");
        
        $sql6 = mysqli_query($conn, "DELETE FROM topicos WHERE id_usuario='$id'");
        
        $sql6 = mysqli_query($conn, "DELETE FROM likes WHERE id_usuario='$id'");
        
        $sql7 = mysqli_query($conn, "DELETE FROM seguir WHERE id_seguidor='$id'");
        
        $sql8 = mysqli_query($conn, "DELETE FROM seguir WHERE id_seguindo='$id'");
        
        @unlink("../img/".$id."avatar.jpg");
        
        echo "<script>alert ('Conta Apagada com sucesso.');window.location='../admin'</script>";
        
    }
    
}

?>