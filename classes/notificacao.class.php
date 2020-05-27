<?php

class notificacao{
    
    public $id_usuarios;
    public $id_usuarios_receber;
    public $texto;
    public $data_notificacao;
    public $id_comentario;
    public $id_notificacao;

    public function inserirNotificacao(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "INSERT INTO notificacao (id_usuarios, id_usuarios_receber, texto, data_notificacao, id_comentario) VALUES ('$this->id_usuarios', '$this->id_usuarios_receber', '$this->texto', '$this->data_notificacao', '$this->id_comentario')") or die("Erro InserirNotificacao");
        
    }
    
    public function verificarExistenciaNotificacao(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM notificacao WHERE id_usuarios='$this->id_usuarios' AND id_usuarios_receber='$this->id_usuarios_receber' AND texto='$this->texto' AND data_notificacao='$this->data_notificacao' AND id_comentario='$this->id_comentario'") or die("Erro verificarExistenciaNotificacao");
        $qtd = mysqli_num_rows($sql);
        
        if($qtd > 0){
            
            return true;
            
        }else{
            
            return false;
            
        }
        
    }
    
    public function apagarNotificacao(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "DELETE FROM notificacao WHERE id=$this->id_notificacao");
        
    }
    
    public function apagarNotificacaoPeloUsuario(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "DELETE FROM notificacao WHERE id_usuarios_receber=$this->id_usuarios_receber");
        
    }
    
    public function retornaNotificacao(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM notificacao WHERE id_usuarios_receber='$this->id_usuarios_receber' ORDER BY id DESC");
        $qtd = mysqli_num_rows($sql);
        while ($linha = mysqli_fetch_assoc($sql)){
            
            $array[] = $linha;
            
        }
        
        if($qtd > 0){
            
            return $array;
            
        }else{
            
            return false;
            
        }
        
    }
    
    public function retornaDadosComentarioPeloId($id){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM comentarios WHERE id='$id'");
        while ($linha = mysqli_fetch_assoc($sql)){
            
            $array[] = $linha;
            
        }
            
        return $array;
        
    }
    
    public function retornaDadosNotificacaoPeloId(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM notificacao WHERE id='$this->id_notificacao'");
        while ($linha = mysqli_fetch_assoc($sql)){
            
            $array[] = $linha;
            
        }
            
        return $array;
        
    }
    
    public function verificaQtdNotificacao(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM notificacao WHERE id_usuarios_receber='$this->id_usuarios_receber'");
        $qtd = mysqli_num_rows($sql);
        
        return $qtd;
        
    }
    
}

?>