<?php

class comentario2{
    
    public $idComentario;
    public $idUsuario;


    public function retornaQtdLike(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM likes WHERE id_comentario=$this->idComentario");
        $qtdSql = mysqli_num_rows($sql);
        
        return $qtdSql;
        
    }
    
    public function insereLike(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "INSERT INTO likes (id_usuario, id_comentario) VALUES ($this->idUsuario, $this->idComentario)");
        
        $sql2 = mysqli_query($conn, "SELECT likes FROM comentarios WHERE id=$this->idComentario");
        $linha = mysqli_fetch_array($sql2);
        
        $like = $linha["likes"] + 1;
        
        $sql3 = mysqli_query($conn, "UPDATE comentarios SET likes=$like WHERE id=$this->idComentario");
        
    }
    
    public function removeLike(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "DELETE FROM likes WHERE id_usuario=$this->idUsuario AND id_comentario=$this->idComentario");
        
        $sql2 = mysqli_query($conn, "SELECT likes FROM comentarios WHERE id=$this->idComentario");
        $linha = mysqli_fetch_array($sql2);
        
        $like = $linha["likes"] - 1;
        
        $sql3 = mysqli_query($conn, "UPDATE comentarios SET likes=$like WHERE id=$this->idComentario");
        
    }
    
    public function verificaLikeJaComentado(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM likes WHERE id_usuario=$this->idUsuario AND id_comentario=$this->idComentario");
        $qtdSql = mysqli_num_rows($sql);
        
        if($qtdSql > 0){
            
            return true;
            
        }else{
            
            return false;
            
        }
        
    }
    
    public function retornaComentario($livro, $capitulo, $verso){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM comentarios WHERE livro='$livro' AND capitulo=$capitulo AND numero_versiculo=$verso AND privacidade='publico' ORDER BY likes DESC, id DESC");
        $qtdSql = mysqli_num_rows($sql);
        while ($linha = mysqli_fetch_assoc($sql)){
            
            $array[] = $linha;
            
        }
        
        if($qtdSql > 0){
            
            return $array;
            
        }else{
            
            return false;
            
        }
        
    }
    
    public function verificaComentarioSeguidorOuNao(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM comentarios WHERE id='$this->idComentario'");
        $row = mysqli_fetch_array($sql);
        
        $idUsuarioComent = $row["id_usuario"];
        
        $sql2 = mysqli_query($conn, "SELECT * FROM seguir WHERE id_seguidor='$this->idUsuario' AND id_seguindo='$idUsuarioComent'");
        $sqlQtd2 = mysqli_num_rows($sql2);
        
        if($sqlQtd2 > 0){
            
            return true;
            
        }else{
            
            return false;
            
        }
        
    }
    
}

?>
