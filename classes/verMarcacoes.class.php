<?php

class verMarcacoesClass{
    
    public $pg;
    
    public function verMarcacoes($versao){
        
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
            $nomeLivroUrl = urlencode($nomeLivro);
            
        }
        
        if($explode[3] != "cores"){
            
            $cor = $explode[3];
            $corBd;
            
            if($cor == "amarelo"){
                
                $corBd = "fffe80";
                
            }else if($cor == "verde"){
                
                $corBd = "9bff93";
                
            }else if($cor == "laranja"){
                
                $corBd = "ffd686";
                
            }else if($cor == "azul"){
                
                $corBd = "7af7ff";
                
            }else if($cor == "roxo"){
                
                $corBd = "eeb5ff";
                
            }
            
        }
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        if($explode[1] == "todos"){
            
            if($explode[3] != "cores"){
                
                $sql = mysqli_query($conn, "SELECT * FROM marcacoes WHERE id_usuario='$idUsuario' AND cor='$corBd' ORDER BY id DESC LIMIT $somaPg,30") or die("Erro ao verificar marcacoes");
                $sql2 = mysqli_query($conn, "SELECT * FROM marcacoes WHERE id_usuario='$idUsuario' AND cor='$corBd'");
                
            }else{
                
                $sql = mysqli_query($conn, "SELECT * FROM marcacoes WHERE id_usuario='$idUsuario' AND cor!='ffbdbd' ORDER BY id DESC LIMIT $somaPg,30") or die("Erro ao verificar marcacoes");
                $sql2 = mysqli_query($conn, "SELECT * FROM marcacoes WHERE id_usuario='$idUsuario'");
                
            }
            
        }else{
            
            if($explode[3] != "cores"){
                
                $sql = mysqli_query($conn, "SELECT * FROM marcacoes WHERE id_usuario='$idUsuario' AND cor='$corBd' AND livro='$nomeLivro' ORDER BY id DESC LIMIT $somaPg,30") or die("Erro ao verificar marcacoes");
                $sql2 = mysqli_query($conn, "SELECT * FROM marcacoes WHERE id_usuario='$idUsuario' AND livro='$nomeLivro' AND cor='$corBd'");
                
            }else{
                
                $sql = mysqli_query($conn, "SELECT * FROM marcacoes WHERE id_usuario='$idUsuario' AND cor!='ffbdbd' AND livro='$nomeLivro' ORDER BY id DESC LIMIT $somaPg,30") or die("Erro ao verificar marcacoes");
                $sql2 = mysqli_query($conn, "SELECT * FROM marcacoes WHERE id_usuario='$idUsuario' AND livro='$nomeLivro'");
                
            }
            
        }
        
        $linha = mysqli_num_rows($sql);
        
        $linha2 = mysqli_num_rows($sql2);
        
        $totalPg = $linha2 / 30;
        
        if($linha != 0) {
        
        while ($row = mysqli_fetch_array($sql)) {
            
            $cor = $row["cor"];
            $livro = $row["livro"];
            $capitulo = $row["capitulo"];
            $numeroVersiculo = $row["versiculo"];
            
            $livroUrl = urlencode($livro);
            
            if($cor == "fffe80"){
                
                $corBd2 = "amarelo";
                
            }else if($cor == "9bff93"){
                
                $corBd2 = "verde";
                
            }else if($cor == "ffd686"){
                
                $corBd2 = "laranja";
                
            }else if($cor == "7af7ff"){
                
                $corBd2 = "azul";
                
            }else if($cor == "eeb5ff"){
                
                $corBd2 = "roxo";
                
            }
            
            $sql2 = mysqli_query($conn, "SELECT * FROM livros WHERE liv_nome='$livro'");
            while ($row2 = mysqli_fetch_array($sql2)) {
                
                $numeroLivro = $row2["liv_id"];
                
                $sql3 = mysqli_query($conn, "SELECT * FROM versiculos WHERE ver_vrs_id='$versao2' AND ver_liv_id='$numeroLivro' AND ver_capitulo='$capitulo' AND ver_versiculo='$numeroVersiculo'");
                while ($row3 = mysqli_fetch_array($sql3)) {
                    
                    $versiculoTexto = $row3["ver_texto"];
                    
                    echo "<p><a href='./$livroUrl/$capitulo/$numeroVersiculo/$versao'><font class='corVerso' style='color:red'>$livro $capitulo:$numeroVersiculo</font> - <font style='background-color:#$cor'>$versiculoTexto</font></a></p>";
                    
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
                
                if($explode[3] != "cores"){
                    
                    echo "<div id='voltarAvancar'>"
                    . "<a href='marcacoes/todos/$versao/$corBd2/$atrasPg[2]'>$atrasPg[2]</a> <a href='marcacoes/todos/$versao/$corBd2/$atrasPg[1]'>$atrasPg[1]</a> <a href='marcacoes/todos/$versao/$corBd2/$atrasPg[0]'>$atrasPg[0]</a> <font class='pgMeio'>$this->pg</font> <a href='marcacoes/todos/$versao/$corBd2/$frentePg[0]'>$frentePg[0]</a> <a href='marcacoes/todos/$versao/$corBd2/$frentePg[1]'>$frentePg[1]</a> <a href='marcacoes/todos/$versao/$corBd2/$frentePg[2]'>$frentePg[2]</a> &nbsp&nbsp&nbsp&nbsp&nbsp <a href='marcacoes/todos/$versao/$corBd2/$ultimaPg'>$ultimaPg</a>"
                    . "</div>";
                    
                }else{
                    
                    echo "<div id='voltarAvancar'>"
                    . "<a href='marcacoes/todos/$versao/cores/$atrasPg[2]'>$atrasPg[2]</a> <a href='marcacoes/todos/$versao/cores/$atrasPg[1]'>$atrasPg[1]</a> <a href='marcacoes/todos/$versao/cores/$atrasPg[0]'>$atrasPg[0]</a> <font class='pgMeio'>$this->pg</font> <a href='marcacoes/todos/$versao/cores/$frentePg[0]'>$frentePg[0]</a> <a href='marcacoes/todos/$versao/cores/$frentePg[1]'>$frentePg[1]</a> <a href='marcacoes/todos/$versao/cores/$frentePg[2]'>$frentePg[2]</a> &nbsp&nbsp&nbsp&nbsp&nbsp <a href='marcacoes/todos/$versao/cores/$ultimaPg'>$ultimaPg</a>"
                    . "</div>";
                    
                }
                
            }else{
                
                if($explode[3] != "cores"){
                    
                    echo "<div id='voltarAvancar'>"
                    . "<a href='marcacoes/$nomeLivroUrl/$versao/$corBd2/$atrasPg[2]'>$atrasPg[2]</a> <a href='marcacoes/$nomeLivroUrl/$versao/$corBd2/$atrasPg[1]'>$atrasPg[1]</a> <a href='marcacoes/$nomeLivroUrl/$versao/$corBd2/$atrasPg[0]'>$atrasPg[0]</a> <font class='pgMeio'>$this->pg</font> <a href='marcacoes/$nomeLivroUrl/$versao/$corBd2/$frentePg[0]'>$frentePg[0]</a> <a href='marcacoes/$nomeLivroUrl/$versao/$corBd2/$frentePg[1]'>$frentePg[1]</a> <a href='marcacoes/$nomeLivroUrl/$versao/$corBd2/$frentePg[2]'>$frentePg[2]</a> &nbsp&nbsp&nbsp&nbsp&nbsp <a href='marcacoes/$nomeLivroUrl/$versao/$corBd2/$ultimaPg'>$ultimaPg</a>"
                    . "</div>";
                    
                }else{
                    
                    echo "<div id='voltarAvancar'>"
                    . "<a href='marcacoes/$nomeLivroUrl/$versao/cores/$atrasPg[2]'>$atrasPg[2]</a> <a href='marcacoes/$nomeLivroUrl/$versao/cores/$atrasPg[1]'>$atrasPg[1]</a> <a href='marcacoes/$nomeLivroUrl/$versao/cores/$atrasPg[0]'>$atrasPg[0]</a> <font class='pgMeio'>$this->pg</font> <a href='marcacoes/$nomeLivroUrl/$versao/cores/$frentePg[0]'>$frentePg[0]</a> <a href='marcacoes/$nomeLivroUrl/$versao/cores/$frentePg[1]'>$frentePg[1]</a> <a href='marcacoes/$nomeLivroUrl/$versao/cores/$frentePg[2]'>$frentePg[2]</a> &nbsp&nbsp&nbsp&nbsp&nbsp <a href='marcacoes/$nomeLivroUrl/$versao/cores/$ultimaPg'>$ultimaPg</a>"
                    . "</div>";
                    
                }
                
            }
            
        }else {
            
            echo "<font style='color:red; text-align:center; font-size:20px'>Nenhum resultado encontrado !</font>";
            
        }
        
    }
    
}

?>