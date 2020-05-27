<?php

class marcacoes{
    
    public $idUsuario;
    
    public $livro;
    
    public $capitulo;
    
    public $versiculo;

    public $cor;
    
    public function cadastrarMarcacao($versao){
        
        $livroUrl = urlencode($this->livro);
        
        if($versao == 1){
            
            $versao = "aa";
            
        }else if($versao == 2){
            
            $versao = "acf";
            
        }else if($versao == 3){
            
            $versao = "nvi";
            
        }
        
        include 'conexao.class.php';
        
        $sql1 = mysqli_query($conn, "SELECT * FROM marcacoes WHERE id_usuario='$this->idUsuario' AND livro='$this->livro' AND capitulo='$this->capitulo' AND versiculo='$this->versiculo'") or die("Erro consulta");
        $row = mysqli_num_rows($sql1);
        
        if($row == 0) {
        
        $sql = mysqli_query($conn, "INSERT INTO marcacoes (id_usuario, livro, capitulo, versiculo, cor) VALUES ($this->idUsuario, '$this->livro', $this->capitulo, $this->versiculo, '$this->cor')") or die("Erro bd");
        
        echo "<script>window.location='../$livroUrl/$this->capitulo/$this->versiculo/$versao'</script>";
        
        } else {
            
            $sql2 = mysqli_query($conn, "UPDATE marcacoes SET cor='$this->cor' WHERE id_usuario='$this->idUsuario' AND livro='$this->livro' AND capitulo='$this->capitulo' AND versiculo='$this->versiculo'");
            
            echo "<script>window.location='../$livroUrl/$this->capitulo/$this->versiculo/$versao'</script>";
            
        }
        
    }
    
    public function apagarMarcacao($versao){
        
        $livroUrl = urlencode($this->livro);
        
        if($versao == 1){
            
            $versao = "aa";
            
        }else if($versao == 2){
            
            $versao = "acf";
            
        }else if($versao == 3){
            
            $versao = "nvi";
            
        }
        
        include 'conexao.class.php';
        
        $sql1 = mysqli_query($conn, "SELECT * FROM marcacoes WHERE id_usuario='$this->idUsuario' AND livro='$this->livro' AND capitulo='$this->capitulo' AND versiculo='$this->versiculo'") or die("Erro consulta");
        $row = mysqli_num_rows($sql1);
        
        if($row == 1){
            
            $sql2 = mysqli_query($conn, "DELETE FROM marcacoes WHERE id_usuario='$this->idUsuario' AND livro='$this->livro' AND capitulo='$this->capitulo' AND versiculo='$this->versiculo'");
            
            echo "<script>window.location='../$livroUrl/$this->capitulo/$this->versiculo/$versao'</script>";
            
        }
        
    }
    
}

?>