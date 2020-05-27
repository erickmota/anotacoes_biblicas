<?php

class verificaExistenciaBd {
    
    public $livro;
    public $capitulo;
    public $versiculo;
    public $versao;
    
    public function verificaLivro(){
        
        include "conexao.class.php";
        
        $sql = mysqli_query($conn, "SELECT * FROM livros WHERE liv_nome='$this->livro'") or die("Erro");
        $num = mysqli_num_rows($sql);
        
        return $num;
        
    }
    
    public function verificaCapitulo(){
        
        include "conexao.class.php";
        
        $sql = mysqli_query($conn, "SELECT * FROM livros WHERE liv_nome='$this->livro'") or die("Erro");
        $result = mysqli_fetch_array($sql);
        
        $idLivro = $result["liv_id"];
        
        /* Coloquei "ORDER BY ver_capitulo desc" para a busca pegar o maior
        número dos copítulos */
        
        $sql2 = mysqli_query($conn, "SELECT ver_capitulo FROM versiculos WHERE ver_liv_id='$idLivro' AND ver_vrs_id=2 ORDER BY ver_capitulo desc") or die ("Erro verifica capitulo");
        $num2 = mysqli_fetch_array($sql2);
        
        $numeroCapitulo = $num2["ver_capitulo"];
        
        // Retornando o maior número
        
        return $numeroCapitulo;
    }
    
    public function verificaVersao(){
        
        include "conexao.class.php";
        
        $sql = mysqli_query($conn, "SELECT * FROM versoes WHERE nome_curto='$this->versao'") or die("Erro veririfica versão");
        $num = mysqli_num_rows($sql);
        
        return $num;
        
    }
    
    public function verificaVersiculo(){
        
        include "conexao.class.php";
        
        $sql = mysqli_query($conn, "SELECT * FROM livros WHERE liv_nome='$this->livro'") or die("Erro");
        $result = mysqli_fetch_array($sql);
        
        $idLivro = $result["liv_id"];
        
        $sql2 = mysqli_query($conn, "SELECT ver_versiculo FROM versiculos WHERE ver_liv_id='$idLivro' AND ver_vrs_id=2 AND ver_capitulo='$this->capitulo' ORDER BY ver_versiculo desc") or die("Erro Verifica versiculo");
        $num2 = mysqli_fetch_array($sql2);
        
        $numeroVersiculo = $num2["ver_versiculo"];
        
        // Retornando o maior número
        
        return $numeroVersiculo;
        
    }
    
    public function verificaEmail($email){
        
        include "conexao.class.php";
        
        $sql = mysqli_query($conn, "SELECT email FROM usuarios WHERE email='$email'");
        $num = mysqli_num_rows($sql);
        
        if($num == 1){
            
            return true;
            
        }else{
            
            return false;
            
        }
        
    }
    
    public function verificaEstado($email){
        
        include "conexao.class.php";
        
        $sql = mysqli_query($conn, "SELECT estado FROM usuarios WHERE email='$email'");
        $num = mysqli_fetch_array($sql);
        
        $estado = $num["estado"];
        
        return $estado;
        
    }
    
    public function verificaUsuario($nome){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT nome FROM usuarios WHERE nome='$nome' AND estado='confirmado'") or die("Erro Verifica Usuario");
        $qtdSql = mysqli_num_rows($sql);
        
        if($qtdSql == 1){
            
            return true;
            
        }else{
            
            return false;
            
        }
        
    }
    
}

?>
