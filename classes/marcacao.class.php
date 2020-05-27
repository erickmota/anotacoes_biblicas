<?php

class marcacao{
    
    public $posicao;
    
    public $livro;
    
    public $capitulo;
    
    public function cadastrarMarcacao(){
        
        include 'conexao.class.php';
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "UPDATE usuarios SET livro$this->posicao='$this->livro' WHERE id='$idUsuario'") or die("Erro bd");
        $sql2 = mysqli_query($conn, "UPDATE usuarios SET capitulo$this->posicao='$this->capitulo' WHERE id='$idUsuario'") or die("Erro bd");
        
        echo "<script>window.alert('Passagem marcada com sucesso !'); window.location='../index.php'</script>";
        
    }
    
    public function verMarcacaoLivro1(){
        
        include 'conexao.class.php';
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$idUsuario'") or die("Erro bd");
        $row = mysqli_fetch_array($sql);
        
        $livro = $row["livro1"];
        
        return $livro;
        
    }
    
    public function verMarcacaoCapitulo1(){
        
        include 'conexao.class.php';
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$idUsuario'") or die("Erro bd");
        $row = mysqli_fetch_array($sql);
        
        $livro = $row["capitulo1"];
        
        return $livro;
        
    }
    
    public function verMarcacaoLivro2(){
        
        include 'conexao.class.php';
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$idUsuario'") or die("Erro bd");
        $row = mysqli_fetch_array($sql);
        
        $livro = $row["livro2"];
        
        return $livro;
        
    }
    
    public function verMarcacaoCapitulo2(){
        
        include 'conexao.class.php';
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$idUsuario'") or die("Erro bd");
        $row = mysqli_fetch_array($sql);
        
        $livro = $row["capitulo2"];
        
        return $livro;
        
    }
    
    public function verMarcacaoLivro3(){
        
        include 'conexao.class.php';
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$idUsuario'") or die("Erro bd");
        $row = mysqli_fetch_array($sql);
        
        $livro = $row["livro3"];
        
        return $livro;
        
    }
    
    public function verMarcacaoCapitulo3(){
        
        include 'conexao.class.php';
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$idUsuario'") or die("Erro bd");
        $row = mysqli_fetch_array($sql);
        
        $livro = $row["capitulo3"];
        
        return $livro;
        
    }
    
}

?>