<?php

class comentarios{
    
    public $idUsuario;
    
    public $livro;
    
    public $capitulo;
    
    public $numeroVersiculo;
    
    public $texto;
    
    public $versao;
    
    public $privacidade;


    public function cadastrarComentarios(){
        
        $dataComentario = date("Y-m-d H:i:s");
        
        $livroUrl = urlencode($this->livro);
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM comentarios WHERE id_usuario='$this->idUsuario' AND livro='$this->livro' AND capitulo='$this->capitulo' AND numero_versiculo='$this->numeroVersiculo'");
        $row = mysqli_num_rows($sql);
        
        $sql9 = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$this->idUsuario'");
        $linha9 = mysqli_fetch_array($sql9);
        
        $versao = $linha9["versao"];
        
        if($row == 0) {
        
            $rep = str_replace("'", "", $this->texto);
            
            $rep2 = str_replace("|", "<br><br>", $rep);
            
            $explode = explode(" ", $rep2);
            
            $countExplode = count($explode);
            
            $i = 0;
            
            while($i <= $countExplode - 1){
                
                if(preg_match('/^#/', $explode[$i])){
                    
                    $topico = $explode[$i];
                    
                    $sql11 = mysqli_query($conn, "SELECT topico FROM topicos WHERE topico='$topico' AND id_usuario='$this->idUsuario'") or die("Erro BD ver existencia topico");
                    $num = mysqli_num_rows($sql11);
                    
                    if($num < 1){
                        
                        $sql5 = mysqli_query($conn, "INSERT INTO topicos (topico, id_usuario) VALUES ('$topico', $this->idUsuario)") or die("Erro BD explode");
                        
                    }else{}
                    
                }
                
                $i++;
                
            }

            $sql2 = mysqli_query($conn, "INSERT INTO comentarios (id_usuario, livro, capitulo, numero_versiculo, texto, data_comentario, privacidade, likes) VALUES ($this->idUsuario, '$this->livro', $this->capitulo, $this->numeroVersiculo, '$rep2', '$dataComentario', '$this->privacidade', 0)");
            
            //Conteudo historico
            $textoHistorico = "Você efetuou uma anotação em $this->livro $this->capitulo:$this->numeroVersiculo";
            
            $sql4 = mysqli_query($conn, "INSERT INTO historico (texto, livro, capitulo, versiculo, id_usuario, data) VALUES ('$textoHistorico', '$this->livro', $this->capitulo, $this->numeroVersiculo, $this->idUsuario, '$dataComentario')");

            echo "<script>window.location='./$livroUrl/$this->capitulo/$this->numeroVersiculo/$versao'</script>";
        
        }else {
            
            $rep = str_replace("'", "", $this->texto);
            
            $rep2 = str_replace("|", "<br><br>", $rep);
            
            $explode = explode(" ", $rep2);
            
            $countExplode = count($explode);
            
            $i = 0;
            
            while($i <= $countExplode - 1){
                
                if(preg_match('/^#/', $explode[$i])){
                    
                    $topico = $explode[$i];
                    
                    $sql11 = mysqli_query($conn, "SELECT topico FROM topicos WHERE topico='$topico' AND id_usuario='$this->idUsuario'") or die("Erro BD ver existencia topico");
                    $num = mysqli_num_rows($sql11);
                    
                    if($num < 1){
                        
                        $sql5 = mysqli_query($conn, "INSERT INTO topicos (topico, id_usuario) VALUES ('$topico', $this->idUsuario)") or die("Erro BD explode");
                        
                    }
                    
                }else{}
                
                $i++;
                
            }
            
            $sql3 = mysqli_query($conn, "UPDATE comentarios SET texto='$rep2', data_comentario='$dataComentario', privacidade='$this->privacidade' WHERE id_usuario='$this->idUsuario' AND livro='$this->livro' AND capitulo='$this->capitulo' AND numero_versiculo='$this->numeroVersiculo'");
            
            //Conteudo historico
            $textoHistorico = "Você atualizou uma anotação em $this->livro $this->capitulo:$this->numeroVersiculo";
            
            $sql4 = mysqli_query($conn, "INSERT INTO historico (texto, livro, capitulo, versiculo, id_usuario, data) VALUES ('$textoHistorico', '$this->livro', $this->capitulo, $this->numeroVersiculo, $this->idUsuario, '$dataComentario')");
            
            echo "<script>window.location='./$livroUrl/$this->capitulo/$this->numeroVersiculo/$versao'</script>";
            
        }
        
    }
    
    public function retornarData(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM comentarios WHERE id_usuario='$this->idUsuario' AND livro='$this->livro' AND capitulo='$this->capitulo' AND numero_versiculo='$this->numeroVersiculo'");
        $row = mysqli_num_rows($sql);
        
        if($row == 0) {
            
            return "(sem anotação)";
            
        }else{
            
            while ($linha = mysqli_fetch_array($sql)) {
            
            $data = $linha["data_comentario"];
            
            $dia = substr($data, 8, 2);
            $mes = substr($data, 5, 2);
            $ano = substr($data, 0, 4);
            $hora = substr($data, 11, 2);
            $minuto = substr($data, 14, 2);
            
            $dataCompleta = "$dia/$mes/$ano - $hora:$minuto";
            
            if($data == NULL) {
                
                return "(data indefinida)";
                
            }else{
                
               return "<font style='color:red'>($dataCompleta)</font>"; 
                
            }        
            
            }
            
        }
        
    }
    
    public function verificarExistenciaComentario(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM comentarios WHERE id_usuario='$this->idUsuario' AND livro='$this->livro' AND capitulo='$this->capitulo' AND numero_versiculo='$this->numeroVersiculo'");
        $row = mysqli_num_rows($sql);
        while ($linha = mysqli_fetch_array($sql)) {
            
            $coment = $linha["texto"];
            
            $coment2 = str_replace("<br><br>", "|", $coment);
            
            return $coment2;
            
        }
        
    }
    
    public function apagarComentario($versao){
        
        $livroUrl = urlencode($this->livro);
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM comentarios WHERE id_usuario='$this->idUsuario' AND livro='$this->livro' AND capitulo='$this->capitulo' AND numero_versiculo='$this->numeroVersiculo'");
        $linha = mysqli_fetch_array($sql);
        
        $idComentario = $linha["id"];
        
        $sql2 = mysqli_query($conn, "DELETE FROM likes WHERE id_comentario='$idComentario'");
        
        $sql4 = mysqli_query($conn, "DELETE FROM comentarios WHERE id_usuario='$this->idUsuario' AND livro='$this->livro' AND capitulo='$this->capitulo' AND numero_versiculo='$this->numeroVersiculo'") or die("Erro bd");
        
        echo "<script>window.location='../$livroUrl/$this->capitulo/$this->numeroVersiculo/$versao'</script>";
        
    }
    
    public function anotacoesRapidas($texto){
        
        include 'conexao.class.php';
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "UPDATE usuarios SET anotacoesrapidas='$texto' WHERE id='$idUsuario'") or die("Erro Anotações Rápidas");
        
        echo "<script>window.alert('Anotação atualizada com sucesso !'); window.location='../'</script>";
        
    }
    
    public function verAnotacoesRapidas(){
        
        include 'conexao.class.php';
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$idUsuario'") or die("Erro ver Anotações");
        $linha = mysqli_fetch_array($sql);
        
        $texto = $linha["anotacoesrapidas"];
        
        echo $texto;
        
    }
    
    public function sinalizarPassagem($livro, $capitulo, $verso, $versao){
        
        include 'conexao.class.php';
        
        if($versao == 1){
    
            $versao2 = "aa";

        }elseif($versao == 2){

            $versao2 = "acf";

        }elseif($versao == 3){

            $versao2 = "nvi";

        }
        
        $sql = mysqli_query($conn, "SELECT * FROM passagens_erradas WHERE livro='$livro' AND capitulo='$capitulo' AND verso='$verso' AND versao='$versao'");
        $num = mysqli_num_rows($sql);
        
        if($num < 1){
            
            $sql2 = mysqli_query($conn, "INSERT INTO passagens_erradas (livro, capitulo, verso, versao) VALUES ('$livro', $capitulo, $verso, $versao)");
            
            echo "<script>window.alert('Obrigado, sua ajuda é muito importante para nós. Iremos avaliar o versículo, e corrigir o mais rápido possível.'); window.location='../$livro/$capitulo/$verso/$versao2'</script>";
            
        }else{
            
            echo "<script>window.alert('Obrigado, sua ajuda é muito importante para nós. Iremos avaliar o versículo, e corrigir o mais rápido possível.'); window.location='../$livro/$capitulo/$verso/$versao2'</script>";
            
        }
        
    }
    
    public function verificaPrivacidadeComentario(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT privacidade FROM comentarios WHERE id_usuario='$this->idUsuario' AND livro='$this->livro' AND capitulo='$this->capitulo' AND numero_versiculo='$this->numeroVersiculo'") or die("Erro verificaPrivacidadeComentario");
        $linha = mysqli_fetch_array($sql);
        
        $privacidade = $linha["privacidade"];
        
        return $privacidade;
        
    }
    
}

?>