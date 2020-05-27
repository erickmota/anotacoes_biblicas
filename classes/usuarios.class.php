<?php

//Classe para controle de usuários

class usuarios{
    
    public $idUsuario;
    public $nome;


    public function retornaDadosUsuario(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE nome='$this->nome'");
        $qtdBusca = mysqli_num_rows($sql);
        while($linha = mysqli_fetch_assoc($sql)){
            
            $array[] = $linha;
            
        }
        
        if($qtdBusca <= 0){
            
            return NULL;
            
        }else{
            
            return $array;
            
        }
        
    }
    
    public function retornaAnotacao($tabela){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM $tabela WHERE id_usuario=$this->idUsuario") or die("Erro retorna anotações");
        $qtdBusca = mysqli_num_rows($sql);
        
        return $qtdBusca;
        
    }
    
    public function retornaAnotacaoPublica($tabela){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM $tabela WHERE id_usuario=$this->idUsuario AND privacidade='publico'") or die("Erro retorna anotações");
        $qtdBusca = mysqli_num_rows($sql);
        
        return $qtdBusca;
        
    }
    
    public function retornaUltimasAnotacoesPublicas(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM comentarios WHERE id_usuario=$this->idUsuario AND privacidade='publico' ORDER BY id desc LIMIT 10");
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
    
    public function insereSeguir($seguindo){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "INSERT INTO seguir (id_seguidor, id_seguindo) VALUES ($this->idUsuario, $seguindo)");
        
    }
    
    public function removeSeguir($seguindo){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "DELETE FROM seguir WHERE id_seguidor=$this->idUsuario AND id_seguindo=$seguindo");
        
    }
    
    public function verificaSeguirJaSeguindo($seguindo){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM seguir WHERE id_seguidor=$this->idUsuario AND id_seguindo=$seguindo");
        $qtdSql = mysqli_num_rows($sql);
        
        if($qtdSql > 0){
            
            return true;
            
        }else{
            
            return false;
            
        }
        
    }
    
    public function retornaImagem(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT img FROM usuarios WHERE id='$this->idUsuario'");
        $linha = mysqli_fetch_array($sql);
        
        $img = $linha["img"];
        
        if($img == NULL){
            
            return false;
            
        }else{
            
            return $img;
            
        }
                
    }
    
    public function retornaImagemPeloNome($nome){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT img FROM usuarios WHERE nome='$nome'");
        $linha = mysqli_fetch_array($sql);
        
        $img = $linha["img"];
        
        if($img == NULL){
            
            return false;
            
        }else{
            
            return $img;
            
        }
                
    }
    
    public function retornaNomePeloComentario(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT nome FROM usuarios WHERE id='$this->idUsuario'");
        $linha = mysqli_fetch_array($sql);
        
        $nome = $linha["nome"];
        
        return $nome;
        
    }
    
    public function retornaSeguindoPorUsuario($idSeguidor){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM seguir WHERE id_seguidor='$idSeguidor'");
        $qtdBusca = mysqli_num_rows($sql);
        while ($linha = mysqli_fetch_assoc($sql)){
            
            $array[] = $linha;
            
        }
        
        if($qtdBusca <= 0){
            
            return NULL;
            
        }else{
            
            return $array;
            
        }
        
    }
    
    public function buscarUsuarioPorNome($busca){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE nome LIKE '%$busca%' AND estado='confirmado' LIMIT 10");
        $qtdBusca = mysqli_num_rows($sql);
        while($linha = mysqli_fetch_assoc($sql)){
            
            $array[] = $linha;
            
        }
        
        if($qtdBusca <= 0){
            
            return NULL;
            
        }else{
            
            return $array;
            
        }
        
    }
    
    public function alteraFrasePerfil($frase){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "UPDATE usuarios SET sobre='$frase' WHERE id='$this->idUsuario'");
        
    }
    
    public function retornaAnotacaoPublicaPorCapitulo($idUsuario, $livro, $capitulo){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM comentarios WHERE id_usuario=$idUsuario AND privacidade='publico' AND livro='$livro' AND capitulo='$capitulo'") or die("Erro retorna anotações");
        $qtdBusca = mysqli_num_rows($sql);
        
        return $qtdBusca;
        
    }
    
    public function retornaIdPorNome($nome){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT id FROM usuarios WHERE nome='$nome'");
        $linha = mysqli_fetch_array($sql);
        
        return $linha["id"];
        
    }
    
    public function retornaQtdSeguindo($idSeguindo){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM seguir WHERE id_seguindo='$idSeguindo'");
        $qtdBusca = mysqli_num_rows($sql);
        
        return $qtdBusca;
        
    }
    
}

?>
