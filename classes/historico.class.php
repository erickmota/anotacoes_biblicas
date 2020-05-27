<?php

class historico{
    
    public $data;
    public $idUsuario;
    public $idHistorico;

    public function retornaHistorico(){
        
        include 'conexao.class.php';
                
        $sql = mysqli_query($conn, "SELECT * FROM historico WHERE id_usuario='$this->idUsuario' AND data LIKE'%$this->data%' ORDER BY id DESC");
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
    
    public function apagarHistorico(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "DELETE FROM historico WHERE id='$this->idHistorico'");
        
    }
    
    public function salvarDataHistorico($nomeData){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "INSERT INTO historico_datas (nome, data, id_usuario) VALUE ('$nomeData', '$this->data', $this->idUsuario)");
        
    }
    
    public function retornarDataHistorico(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM historico_datas WHERE id_usuario='$this->idUsuario' ORDER BY id DESC");
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
    
    public function retornaNomeDataHistorico(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM historico_datas WHERE id_usuario='$this->idUsuario' AND data='$this->data'");
        $linha = mysqli_fetch_array($sql);
            
        $nomeData = $linha["nome"];
        
        return $nomeData;
        
    }

        // Verifica se já existe algum cadastro de nome, na data atual.
    public function verificaDataNome(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM historico_datas WHERE data='$this->data' AND id_usuario=$this->idUsuario");
        $qtdBusca = mysqli_num_rows($sql);
        
        if($qtdBusca > 0){
            
            return true;
            
        }else{
            
            return false;
            
        }
        
    }
    
    public function apagarDataHistorico(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "DELETE FROM historico_datas WHERE id_usuario='$this->idUsuario' AND data='$this->data'");
        
    }
    
    public function inserirHistorico($texto, $livro, $capitulo, $versiculo){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "INSERT INTO historico (texto, livro, capitulo, versiculo, id_usuario, data) VALUES ('$texto', '$livro', $capitulo, $versiculo, $this->idUsuario, '$this->data')");
        
    }
    
    public function sessaoCapitulo($livro, $capitulo){
        
        include 'conexao.class.php';
        
        $nomeLivro = "$livro $capitulo";
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $dataAtual = date("Y-m-d H:i:s");
        
        if(!isset($_COOKIE["verifica_capitulo"])){
            
            setcookie("verifica_capitulo", $nomeLivro, 0, "/");
            
            $textoHistorico = "Você realizou uma leitura em $nomeLivro";
            
            $sql4 = mysqli_query($conn, "INSERT INTO historico (texto, livro, capitulo, versiculo, id_usuario, data) VALUES ('$textoHistorico', '$livro', $capitulo, 0, $idUsuario, '$dataAtual')");
            
        }else{
            
            if($_COOKIE["verifica_capitulo"] == $nomeLivro){
                
                
                
            }else{
                
                setcookie("verifica_capitulo", $nomeLivro, 0, "/");
                
                $textoHistorico = "Você realizou uma leitura em $nomeLivro";
            
                $sql4 = mysqli_query($conn, "INSERT INTO historico (texto, livro, capitulo, versiculo, id_usuario, data) VALUES ('$textoHistorico', '$livro', $capitulo, 0, $idUsuario, '$dataAtual')");
                
            }
            
        }
        
    }
    
    public function retornaUltimaDataHistorico($dataAtual){
        
        include 'conexao.class.php';
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "SELECT data FROM historico WHERE id_usuario='$idUsuario' ORDER BY id desc") or die("Erro bd verifica ultima data");
        while($linha = mysqli_fetch_array($sql)){
            
            if($dataAtual <= substr($linha["data"], 0, 10)){
                
                
                
            }else{
                
                return substr($linha["data"], 0, 10);
                break;
                
            }
            
        }
        
    }
    
}

?>