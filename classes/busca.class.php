<?php

class busca{
    
    public $busca;
    
    public $pg;
    
    public function buscaTexto($versao){
        
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
                    
            $nomeLivro = $explode[2];
            
        
        if($explode[2] == "todos"){
            
            $sql = mysqli_query($conn, "SELECT * FROM versiculos WHERE ver_texto LIKE '%$this->busca%' AND ver_vrs_id='$versao2' ORDER BY ver_id DESC LIMIT $somaPg,30");
            $sql2 = mysqli_query($conn, "SELECT * FROM versiculos WHERE ver_texto LIKE '%$this->busca%' AND ver_vrs_id='$versao2' ORDER BY ver_id DESC");
            
        }else{
            
            $sql3 = mysqli_query($conn, "SELECT * FROM livros WHERE liv_nome='$nomeLivro'");
            while ($row2 = mysqli_fetch_array($sql3)) {
                
                $numLivro = $row2["liv_id"];
                
                $sql = mysqli_query($conn, "SELECT * FROM versiculos WHERE ver_texto LIKE '%$this->busca%' AND ver_liv_id='$numLivro' AND ver_vrs_id='$versao2' ORDER BY ver_id DESC LIMIT $somaPg,30");
                $sql2 = mysqli_query($conn, "SELECT * FROM versiculos WHERE ver_texto LIKE '%$this->busca%' AND ver_liv_id='$numLivro' AND ver_vrs_id='$versao2' ORDER BY ver_id DESC");
                
            }
            
        }
        
        
        $linha = mysqli_num_rows($sql);
        
        
        $linha2 = mysqli_num_rows($sql2);
        
        $totalPg = $linha2 / 30;
        
        if($linha != 0) {
            while ($row = mysqli_fetch_array($sql)) {

                $texto = $row["ver_texto"];
                $capitulo = $row["ver_capitulo"];
                $versiculo = $row["ver_versiculo"];
                $livroId = $row["ver_liv_id"];

                $sql2 = mysqli_query($conn, "SELECT * FROM livros WHERE liv_id='$livroId'");
                while ($row1 = mysqli_fetch_array($sql2)) {

                    $livro = $row1["liv_nome"];
                    $livroUrl = urlencode($livro);

                    echo "<p><a href='./$livroUrl/$capitulo/$versiculo/$versao'><font class='corVerso' style='color:red'>$livro $capitulo:$versiculo</font> - $texto</a></p>";
                    
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
            
            $buscaUrl = urlencode($this->busca);
            $nomeLivroUrl = urlencode($nomeLivro);
            
            if($explode[2] == "todos"){
                
                echo "<div id='voltarAvancar'>"
                    . "<a href='busca/$buscaUrl/todos/$versao/$atrasPg[2]'>$atrasPg[2]</a> <a href='busca/$buscaUrl/todos/$versao/$atrasPg[1]'>$atrasPg[1]</a> <a href='busca/$buscaUrl/todos/$versao/$atrasPg[0]'>$atrasPg[0]</a> <font class='pgMeio'>$this->pg</font> <a href='busca/$buscaUrl/todos/$versao/$frentePg[0]'>$frentePg[0]</a> <a href='busca/$buscaUrl/todos/$versao/$frentePg[1]'>$frentePg[1]</a> <a href='busca/$buscaUrl/todos/$versao/$frentePg[2]'>$frentePg[2]</a> &nbsp&nbsp&nbsp&nbsp&nbsp <a href='busca/$buscaUrl/todos/$versao/$ultimaPg'>$ultimaPg</a>"
                    . "</div>";
                
            }else{
                
                echo "<div id='voltarAvancar'>"
                    . "<a href='busca/$buscaUrl/$nomeLivroUrl/$versao/$atrasPg[2]'>$atrasPg[2]</a> <a href='busca/$buscaUrl/$nomeLivroUrl/$versao/$atrasPg[1]'>$atrasPg[1]</a> <a href='busca/$buscaUrl/$nomeLivroUrl/$versao/$atrasPg[0]'>$atrasPg[0]</a> <font class='pgMeio'>$this->pg</font> <a href='busca/$buscaUrl/$nomeLivroUrl/$versao/$frentePg[0]'>$frentePg[0]</a> <a href='busca/$buscaUrl/$nomeLivroUrl/$versao/$frentePg[1]'>$frentePg[1]</a> <a href='busca/$buscaUrl/$nomeLivroUrl/$versao/$frentePg[2]'>$frentePg[2]</a> &nbsp&nbsp&nbsp&nbsp&nbsp <a href='busca/$buscaUrl/$nomeLivroUrl/$versao/$ultimaPg'>$ultimaPg</a>"
                    . "</div>";
                
            }
        
        }else{
            
            echo "<font style='color:red; text-align:center; font-size:20px'>Nenhum resultado encontrado !</font>";
            
        }
        
    }
    
    public function reqtdPg($valorBd, $valorExibido){
        
        $totalPg = $valorBd / $valorExibido;
        
        return $totalPg;
        
    }
    
}

?>