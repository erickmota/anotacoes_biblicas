<?php

class texto{
    
    public $versao;
    public $livro;
    public $capitulo;
    public $verso;
    
    public function retornaVerso(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM versiculos WHERE ver_vrs_id=$this->versao AND ver_liv_id=$this->livro AND ver_capitulo=$this->capitulo AND ver_versiculo=$this->verso") or die("Erro retorna texto");
        $linha = mysqli_fetch_array($sql);
            
        return $linha["ver_texto"];
        
    }
    
    public function retornaNumeroVersao($versao){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM versoes WHERE nome_curto='$versao'");
        $linha = mysqli_fetch_array($sql);
        
        return $linha["vrs_id"];
        
    }
    
    public function retornaNumeroLivro($livro){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM livros WHERE liv_nome='$livro'");
        $linha = mysqli_fetch_array($sql);
        
        return $linha["liv_id"];
        
    }
    
}

?>