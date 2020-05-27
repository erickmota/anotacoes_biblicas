<?php

class usuario {
    
    public $email;
    
    public $senha;

    public function login (){
        
        $novaSenha = base64_encode($this->senha);
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE email='$this->email' and senha='$novaSenha'");
        $ver = mysqli_num_rows($sql);
        while($linha = mysqli_fetch_array($sql)) {
	
	$nome = $linha["nome"];
        $id = $linha["id"];
        $login = $linha["login"];
        $estado = $linha["estado"];
	
	} 
        
        if($ver == 1){
            
            if($estado == "pendente"){
                
                $novoEmail = base64_encode($this->email);
                
                die ("<script>window.location='../confirmacao/$novoEmail'</script>");
                
            }
            
            setcookie("nome_usuario", $nome, time() + 7 * (24 * 3600), "/");
            setcookie("email_usuario", $this->email, time() + 7 * (24 * 3600), "/");
            setcookie("id_usuario", $id, time() + 7 * (24 * 3600), "/");
            
            if($login == 0){
                
                $login2 = $login + 1;
                
                $sql2 = mysqli_query($conn, "UPDATE usuarios SET login='$login2' WHERE id='$id'");
                
                echo "<script>alert ('Vejo que você é novo por aqui ! Que tal aprender a usar o Anotações Bíblicas ?');window.location='../tutorial'</script>";
                
            }else{
                
                $login2 = $login + 1;
                
                $sql2 = mysqli_query($conn, "UPDATE usuarios SET login='$login2' WHERE id='$id'");
                
                echo "<script>alert ('Login efetuado com sucesso !');window.location='../'</script>";
                
            }
            
        } else {
            
            setcookie("nome_usuario", null, -1, "/");
            setcookie("email_usuario", null, -1, "/");
            setcookie("id_usuario", null, -1, "/");
            
            echo "<script>alert ('Login ou senha incorretos !');window.location='../'</script>";
            
        }
        
    }
    
    public function sairLogin(){
        
        setcookie("nome_usuario", null, -1, "/");
        setcookie("email_usuario", null, -1, "/");
        setcookie("id_usuario", null, -1, "/");
            
        echo "<script>alert ('Volte sempre !');window.location='../'</script>";
        
    }
    
    public function consultarCookie(){
        
        include 'conexao.class.php';
        
        $id = $_COOKIE["id_usuario"];
        $nome = $_COOKIE["nome_usuario"];
        
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$id' AND nome='$nome'") or die("Erro na consulta");
        $linha = mysqli_num_rows($sql);
        
        if($linha == 0){
            
            return false;
            
        }else{
            
            return true;
            
        }
        
    }
    
    public function atualizarEstado($email){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "UPDATE usuarios SET estado='confirmado' WHERE email='$email'");
        
    }
    
    public function retornaNome($email){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT nome FROM usuarios WHERE email='$email'");
        $num = mysqli_fetch_array($sql);
        
        $nome = $num["nome"];
        
        return $nome;
        
    }
    
    public function verificaAdmin ($email, $senha){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' and senha='$senha'");
        $ver = mysqli_num_rows($sql);
        $row = mysqli_fetch_array($sql);
        
        $emailBd = $row["email"];
        $senhaBd = $row["senha"];
        
        if($ver == 1){
            
            setcookie("emailAdmin_ab", $emailBd, time() + 7 * (24 * 3600), "/");
            
            echo "<script>alert ('Você está conectado à página de administrador do Anotações Bíblicas."
            . " Não se esqueça de clicar em sair para deslogar, caso contrário essa página ficará aberta nesse dispositivo.');window.location='../admin'</script>";
            
        }else{
            
            echo "<script>alert ('Permissão negada!');window.location='../loginAdmin'</script>";
            
        }
        
    }
    
    public function sairAdmin (){
        
        setcookie("emailAdmin_ab", null, -1, "/");
        
        echo "<script>alert ('Você foi deslogado da página de administrador.');window.location='../'</script>";
        
    }
    
    public function retornaDataCadastro($idUsuario){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT data_cadastro FROM usuarios WHERE id='$idUsuario'");
        $linha = mysqli_fetch_array($sql);
        
        $dataCadastro = $linha["data_cadastro"];
        
        $dia = substr($dataCadastro, 8, 2);
        $mes = substr($dataCadastro, 5, 2);
        $ano = substr($dataCadastro, 0, 4);
        $hora = substr($dataCadastro, 11, 2);
        $minuto = substr($dataCadastro, 14, 2);
        
        if($dataCadastro == NULL){
                
            return "(Data indefinida)";

        }else{

            return "<font style='color:red'>($dia/$mes/$ano - $hora:$minuto)</font>";

        }
        
    }
    
    public function editarNome($idUsuario, $novoNome){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "UPDATE usuarios SET nome='$novoNome' WHERE id='$idUsuario'");
        
    }
    
    public function retornaSenha($idUsuario){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT senha FROM usuarios WHERE id='$idUsuario'");
        $linha = mysqli_fetch_array($sql);
        
        $senha = $linha["senha"];
        
        $novaSenha = base64_decode($senha);
        
        return $novaSenha;
        
    }

    public function editarSenha($senha, $idUsuario){
        
        include 'conexao.class.php';
        
        $novaSenha = base64_encode($senha);
        
        $sql = mysqli_query($conn, "UPDATE usuarios SET senha='$novaSenha' WHERE id='$idUsuario'");
        
    }
    
    public function enviarImagem($imagem){
        
        include 'conexao.class.php';
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        if($imagem["size"] > 3145728) {
            
            die("<script>window.alert('Por favor, envie uma imagem com no máximo 3mb no formato JPG!');window.location='../configuracoes'</script>");
            
        }
        
        if($imagem["type"] != "image/jpeg"){
            
            die("<script>window.alert('Por favor, envie uma imagem com no máximo 3mb no formato JPG!');window.location='../configuracoes'</script>");
            
        }

        $pasta = "../img/";
        
        move_uploaded_file($imagem["tmp_name"], $pasta.$idUsuario."avatar.jpg");
        
        $orgFile = $pasta.$idUsuario."avatar.jpg";
        
        list($largura, $altura) = getimagesize($orgFile);
        
        $novaImg = imagecreatefromjpeg($orgFile);
        
        if($largura >= 1500){
            
            $novaLargura = $largura*0.25;
            $novaAltura = $altura*0.25;
            
        }elseif($largura < 1500 && $largura > 1000){
            
            $novaLargura = $largura*0.50;
            $novaAltura = $altura*0.50;
            
        }else{
            
            $novaLargura = $largura*0.75;
            $novaAltura = $altura*0.75;
            
        }
        
        $trucolor = imagecreatetruecolor($novaLargura, $novaAltura);
        $novaI = imagecopyresampled($trucolor, $novaImg, 0, 0, 0, 0, $novaLargura, $novaAltura, $largura, $altura);
        
        $nova = imagejpeg($trucolor, $pasta.$idUsuario."avatar.jpg", 25);
        
        $novoNome = $idUsuario."avatar.jpg";
        
        $sql = mysqli_query($conn, "UPDATE usuarios SET img='$novoNome' WHERE id='$idUsuario'");
        
    }
    
    public function retornaImagem(){
        
        include 'conexao.class.php';
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "SELECT img FROM usuarios WHERE id='$idUsuario'");
        $linha = mysqli_fetch_array($sql);
        
        $img = $linha["img"];
        
        return $img;
                
    }
    
    public function apagarFoto(){
        
        include 'conexao.class.php';
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        unlink("../img/".$idUsuario."avatar.jpg");
        
        $vNull = null;
        
        $sql = mysqli_query($conn, "UPDATE usuarios SET img='$vNull' WHERE id='$idUsuario'");
        
    }
    
}

?>