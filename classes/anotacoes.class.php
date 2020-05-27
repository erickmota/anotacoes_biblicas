<?php

class anotacoes{
    
    public $pg;
    
    public function verAnotacoes($versao){
        
        @$explode = explode("/", $_GET["url"]);
        
        $versao2;
        
        if($versao == "aa"){
            
            $versao2 = 1;
            
        }else if($versao == "acf"){
            
            $versao2 = 2;
            
        }else if($versao == "nvi"){
            
            $versao2 = 3;
            
        }
        
        include 'conexao.class.php';
        
        $somaPg = ($this->pg * 30) - 30;
        
        if($explode[1] != "todos"){
            
            $nomeLivro = $explode[1];
            
        }
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        if($explode[1] == "todos"){
            
            $sql = mysqli_query($conn, "SELECT * FROM comentarios WHERE id_usuario='$idUsuario' ORDER BY id DESC LIMIT $somaPg,30") or die("Erro ao verificar comentarios");
            $sql2 = mysqli_query($conn, "SELECT * FROM comentarios WHERE id_usuario='$idUsuario'");
            
        }else if(preg_match('/^busca/', $explode[1]) AND $explode[1] != "todos"){
            
            $buscaPor = substr($explode[1], 5);
            
            $sql = mysqli_query($conn, "SELECT * FROM comentarios WHERE texto LIKE '%#$buscaPor%' AND id_usuario='$idUsuario' ORDER BY id DESC LIMIT $somaPg,30") or die("Erro ao verificar comentarios topicos");
            $sql2 = mysqli_query($conn, "SELECT * FROM comentarios WHERE texto LIKE '%#$buscaPor%' AND id_usuario='$idUsuario'");
            
        }else{
            
            $sql = mysqli_query($conn, "SELECT * FROM comentarios WHERE id_usuario='$idUsuario' AND livro='$nomeLivro' ORDER BY id DESC LIMIT $somaPg,30") or die("Erro ao verificar comentarios");
            $sql2 = mysqli_query($conn, "SELECT * FROM comentarios WHERE id_usuario='$idUsuario' AND livro='$nomeLivro'");
            
        }
        
        
        $linha = mysqli_num_rows($sql);
        
        
        $linha2 = mysqli_num_rows($sql2);
        
        $totalPg = $linha2 / 30;
        
        if($linha != 0) {
        
        while ($row = mysqli_fetch_array($sql)) {
            
            $texto = $row["texto"];
            $livro = $row["livro"];
            $livroUrl = urlencode($livro);
            $capitulo = $row["capitulo"];
            $numeroVersiculo = $row["numero_versiculo"];
            
            $explodeTopico = explode(" ", $texto);
                        
            $numExplode = count($explodeTopico);
            
            $sql2 = mysqli_query($conn, "SELECT * FROM livros WHERE liv_nome='$livro'");
            while ($row2 = mysqli_fetch_array($sql2)) {
                
                $numeroLivro = $row2["liv_id"];
                
                $sql3 = mysqli_query($conn, "SELECT * FROM versiculos WHERE ver_vrs_id='$versao2' AND ver_liv_id='$numeroLivro' AND ver_capitulo='$capitulo' AND ver_versiculo='$numeroVersiculo'");
                while ($row3 = mysqli_fetch_array($sql3)) {
                    
                    $versiculoTexto = $row3["ver_texto"];
                    
                    $i = 0;
                    
                    echo "<p><a href='$livroUrl/$capitulo/$numeroVersiculo/$versao'><font style='color:red'>$livro $capitulo:$numeroVersiculo</font> - $versiculoTexto</a><br><font style='color:red'>";
                            
                            while($i <= $numExplode - 1){
                                
                                if(preg_match('/^http:/', $explodeTopico[$i]) or preg_match('/^https:/', $explodeTopico[$i])){
                                    
                                    echo "<a style='font-size:15px; color: #00a8ec' href='$explodeTopico[$i]' target='_blank'>$explodeTopico[$i]</a> ";
                                    
                                }else if(preg_match('/^#/', $explodeTopico[$i])){
                                    
                                    echo "<a style='font-size:15px; color: #00a8ec' href='anotacoes/busca".substr($explodeTopico[$i], 1)."/$versao/1'>$explodeTopico[$i]</a> ";
                                    
                                }else{
                                    
                                    echo "$explodeTopico[$i] ";
                                    
                                }
                                
                                $i++;
                                
                            }
                            
                            echo "</font></p>";
                    
                }
                
            }
            
        }
        
        echo "</div>";
        
        $atrasPg = array($this->pg - 1, $this->pg - 2, $this->pg - 3);
            
            if($atrasPg[0] < 1){
                
                $atrasPg[0] = NULL;
                
            }
            
            if($atrasPg[1] < 1){
                
                $atrasPg[1] = NULL;
                
            }
            
            if($atrasPg[2] < 1){
                
                $atrasPg[2] = NULL;
                
            }
            
            $frentePg = array($this->pg + 1, $this->pg + 2, $this->pg + 3);
            
            if($frentePg[0] > ceil($totalPg)) {
                
                $frentePg[0] = NULL;
                
            }
            
            if($frentePg[1] > ceil($totalPg)) {
                
                $frentePg[1] = NULL;
                
            }
            
            if($frentePg[2] > ceil($totalPg)) {
                
                $frentePg[2] = NULL;
                
            }
            
            $ultimaPg = ceil($totalPg);
            
            if($explode[1] == "todos"){
                
                echo "<div id='voltarAvancar'>"
                    . "<a href='anotacoes/todos/$versao/$atrasPg[2]'>$atrasPg[2]</a> <a href='anotacoes/todos/$versao/$atrasPg[1]'>$atrasPg[1]</a> <a href='anotacoes/todos/$versao/$atrasPg[0]'>$atrasPg[0]</a> <font class='pgMeio'>$this->pg</font> <a href='anotacoes/todos/$versao/$frentePg[0]'>$frentePg[0]</a> <a href='anotacoes/todos/$versao/$frentePg[1]'>$frentePg[1]</a> <a href='anotacoes/todos/$versao/$frentePg[2]'>$frentePg[2]</a> &nbsp&nbsp&nbsp&nbsp&nbsp <a href='anotacoes/todos/$versao/$ultimaPg'>$ultimaPg</a>"
                    . "</div>";
                
            }else{
                
                $nomeLivroUrl = urlencode($nomeLivro);
                
                echo "<div id='voltarAvancar'>"
                    . "<a href='anotacoes/$nomeLivroUrl/$versao/$atrasPg[2]'>$atrasPg[2]</a> <a href='anotacoes/$nomeLivroUrl/$versao/$atrasPg[1]'>$atrasPg[1]</a> <a href='anotacoes/$nomeLivroUrl/$versao/$atrasPg[0]'>$atrasPg[0]</a> <font class='pgMeio'>$this->pg</font> <a href='anotacoes/$nomeLivroUrl/$versao/$frentePg[0]'>$frentePg[0]</a> <a href='anotacoes/$nomeLivroUrl/$versao/$frentePg[1]'>$frentePg[1]</a> <a href='anotacoes/$nomeLivroUrl/$versao/$frentePg[2]'>$frentePg[2]</a> &nbsp&nbsp&nbsp&nbsp&nbsp <a href='anotacoes/$nomeLivroUrl/$versao/$ultimaPg'>$ultimaPg</a>"
                    . "</div>";
                
            }
            
        }else {
            
            echo "<font style='color:red; text-align:center; font-size:20px'>Nenhum resultado encontrado !</font>";
            
        }
        
    }
    
    public function retornaTopicos(){
        
        include 'conexao.class.php';
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "SELECT * FROM topicos WHERE id_usuario='$idUsuario'") or die("Erro bd retorna topicos");
        $num = mysqli_num_rows($sql);
        while($linha = mysqli_fetch_assoc($sql)){
            
            $array[] = $linha;
            
        }
        
        if($num <= 0){
            
            return NULL;
            
        }else{
            
         return $array;   
            
        }
        
    }
    
    public function apagaTopico($topico){
        
        include 'conexao.class.php';
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "DELETE FROM topicos WHERE topico='$topico' AND id_usuario='$idUsuario'") or die("Erro bd apagar topico");
        
    }
    
}

?>