<?php

class exibirCapitulo {
    
    public $nome;
    
    public $capitulo;
    
    public $versao;

    public function nome(){
        
        return $this->nome;
        
    }
    
    public function capitulo(){
        
        return $this->capitulo;
        
    }
    
    public function exibirTexto(){
        
        $versao2;
        
        @$explodeUrl = explode("/", $_GET["url"]);
        
        if($this->versao == "aa"){
        
            $this->versao = 1;
            $versao2 = "aa";
        
        }else if($this->versao == "acf"){
            
            $this->versao = 2;
            $versao2 = "acf";
            
        }else if($this->versao == "nvi"){
            
            $this->versao = 3;
            $versao2 = "nvi";
            
        }
        
        include 'conexao.class.php';
        
        $cap = $this->capitulo();
        
        $sql = mysqli_query($conn, "SELECT * FROM livros WHERE liv_nome='$this->nome'");
        while ($row = mysqli_fetch_array($sql)) {
            
            $id = $row["liv_id"];
            
            $sql2 = mysqli_query($conn, "SELECT * FROM versiculos WHERE ver_liv_id='$id' AND ver_capitulo='$cap' AND ver_vrs_id='$this->versao' ORDER BY ver_id");
            
            while ($row1 = mysqli_fetch_array($sql2)) {
                
                $verVer = $row1["ver_versiculo"];
                $textoVer = $row1["ver_texto"];
                $idVersiculo = $row1["ver_id"];
                
                if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                    
                    if(isset($explodeUrl[3])){
                        
                        $sqlNome = mysqli_query($conn, "SELECT id FROM usuarios WHERE nome='$explodeUrl[3]'");
                        $linhaNome = mysqli_fetch_array($sqlNome);
                        
                        $idUsuario = $linhaNome["id"];
                        
                        $sql3 = mysqli_query($conn, "SELECT * FROM comentarios WHERE id_usuario='$idUsuario' AND livro='$this->nome' AND capitulo='$this->capitulo' AND numero_versiculo='$verVer' AND privacidade='publico'");
                        
                    }else{
                        
                        $idUsuario = $_COOKIE["id_usuario"];

                        $sql3 = mysqli_query($conn, "SELECT * FROM comentarios WHERE id_usuario='$idUsuario' AND livro='$this->nome' AND capitulo='$this->capitulo' AND numero_versiculo='$verVer'");
                        
                    }
                
                    $row2 = mysqli_num_rows($sql3);
                    $linha = mysqli_fetch_array($sql3);
                    $linha2 = $linha["texto"];
                    
                    $sql4 = mysqli_query($conn, "SELECT * FROM marcacoes WHERE id_usuario='$idUsuario' AND livro='$this->nome' AND capitulo='$this->capitulo' AND versiculo='$verVer'");
                    $row3 = mysqli_num_rows($sql4);
                    $linha = mysqli_fetch_array($sql4);
                    
                    $cor = $linha["cor"];
                
                }
                
                $livroUrl = urlencode($this->nome);
                
                if(!isset($_GET["ml"])) {
                
                    if(isset($row2) && $row2 == 1) {
                        
                        $explode = explode(" ", $linha2);
                        
                        $numExplode = count($explode);
                        
                        if($row3 == 1){
                            
                            echo "<p id='$verVer'><font class='numeroVerso'>$verVer</font> <a class='verso' style='background-color:#$cor' href='$livroUrl/$this->capitulo/$verVer/$versao2'>$textoVer</a></p>";
                            
                            $i = 0;
                            
                            echo "<p class='pComentarios'>";
                            
                            while($i <= 90){
                                
                                if(preg_match('/^http:/', @$explode[$i]) or preg_match('/^https:/', @$explode[$i])){
                                    
                                    echo "<a style='font-size:15px; color: #00a8ec' href='$explode[$i]' target='_blank'>$explode[$i]</a> ";
                                    
                                }else if(preg_match('/^#/', @$explode[$i])){
                                    
                                    echo "<a style='font-size:15px; color: #00a8ec' href='anotacoes/busca".substr($explode[$i], 1)."/$versao2/1' target='_blank'>$explode[$i]</a> ";
                                    
                                }else{
                                    
                                    echo @$explode[$i]." ";
                                    
                                }
                                
                                $i++;
                                
                            }
                            
                            if($numExplode > 90){
                            
                                echo "... <a href='' data-toggle='modal' data-target='.bd-modal-$idVersiculo-lg'>Ver mais</a>";

                            }
                            
                            echo "</p>";
                            
                            }else{
                            
                            echo "<p id='$verVer'><font class='numeroVerso'>$verVer</font> <a class='verso' href='$livroUrl/$this->capitulo/$verVer/$versao2' style='background-color: #ffbdbd'>$textoVer</a></p>";
                            
                            $i = 0;
                            
                            echo "<p class='pComentarios'>";
                            
                            while($i <= 90){
                                
                                if(preg_match('/^http:/', @$explode[$i]) or preg_match('/^https:/', @$explode[$i])){
                                    
                                    echo "<a style='font-size:15px; color: #00a8ec' href='$explode[$i]' target='_blank'>$explode[$i]</a> ";
                                    
                                }else if(preg_match('/^#/', @$explode[$i])){
                                    
                                    echo "<a style='font-size:15px; color: #00a8ec' href='anotacoes/busca".substr($explode[$i], 1)."/$versao2/1' target='_blank'>$explode[$i]</a> ";
                                    
                                }else{
                                    
                                    echo @$explode[$i]." ";
                                    
                                }
                                
                                $i++;
                                
                            }
                            
                            if($numExplode > 90){
                            
                                echo "... <a href='' data-toggle='modal' data-target='.bd-modal-$idVersiculo-lg'>Ver mais</a>";

                            }
                            
                            echo "</p>";
                            
                        }

                    }else {

                        if(isset($row3) && $row3 == 1) {

                        echo "<p id='$verVer'><font class='numeroVerso'>$verVer</font> <a class='verso' style='background-color:#$cor' href='$livroUrl/$this->capitulo/$verVer/$versao2'>$textoVer</a></p>";

                        }else {

                        echo "<p id='$verVer'><font class='numeroVerso'>$verVer</font> <a class='verso' href='$livroUrl/$this->capitulo/$verVer/$versao2'>$textoVer</a></p>";

                        }

                    }
                
                }else{
                    
                    echo "<p id='$verVer' class='capituloLeitura'><font class='numeroVerso'>$verVer</font> $textoVer</p>";
                    
                }
                
                ?>
                            
                            <div class="<?php echo "modal fade bd-modal-$idVersiculo-lg"; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                    <div class="modal-body"><p class="text-left"><?php

                                    $i = 0;

                                    while($i <= $numExplode){

                                        if(preg_match('/^http:/', @$explode[$i]) or preg_match('/^https:/', @$explode[$i])){

                                            echo "<a style='color: #00a8ec' href='$explode[$i]' target='_blank'>$explode[$i]</a> ";

                                        }else if(preg_match('/^#/', @$explode[$i])){
                                    
                                            echo "<a style='font-size:15px; color: #00a8ec' href='anotacoes/busca".substr($explode[$i], 1)."/$versao2/1' target='_blank'>$explode[$i]</a> ";

                                        }else{

                                            echo @$explode[$i]." ";

                                        }

                                        $i++;

                                    }

                                    ?></p></div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    </div>
                                  </div>
                                </div>
                            </div>

                        <?php
                
            }
            
        }
        
    }
    
    public function exibirVersiculo($verso, $versao){
        
        if($versao == "aa"){
        
            $versao = 1;
        
        }else if($versao == "acf"){
            
            $versao = 2;
            
        }else if($versao == "nvi"){
            
            $versao = 3;
            
        }
        
        include 'conexao.class.php';
        
        $cap = $this->capitulo();
        
        $sql = mysqli_query($conn, "SELECT * FROM livros WHERE liv_nome='$this->nome'");
        while ($row = mysqli_fetch_array($sql)) {
            
            $id = $row["liv_id"];
            
            $sql2 = mysqli_query($conn, "SELECT * FROM versiculos WHERE ver_liv_id='$id' AND ver_capitulo='$cap' AND ver_vrs_id='$versao' AND ver_versiculo='$verso' ORDER BY ver_id");
            while ($row1 = mysqli_fetch_array($sql2)) {
                
                $verVer = $row1["ver_versiculo"];
                $textoVer = $row1["ver_texto"];
                
                if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                
                    $idUsuario = $_COOKIE["id_usuario"];

                    $sql3 = mysqli_query($conn, "SELECT * FROM comentarios WHERE id_usuario='$idUsuario' AND livro='$this->nome' AND capitulo='$this->capitulo' AND numero_versiculo='$verVer'");
                    $row2 = mysqli_num_rows($sql3);
                
                }
                
                if(isset($row2) && $row2 == 0) {
                    
                    $sql4 = mysqli_query($conn, "SELECT * FROM marcacoes WHERE id_usuario='$idUsuario' AND livro='$this->nome' AND capitulo='$this->capitulo' AND versiculo='$verVer'");
                    $row3 = mysqli_num_rows($sql4);
                    $linha = mysqli_fetch_array($sql4);
                    
                    $cor = $linha["cor"];
                    
                    if($row3 == 1) {
                        
                        echo "<p class='text-left verso'><font class='numeroVerso'>$verVer</font> <a style='background-color:#$cor'>$textoVer</a> <br><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=eeb5ff&versao=$versao'><img width='20px' src='./img/marcadorRoxo.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=7af7ff&versao=$versao'><img width='20px' src='./img/marcadorAzul.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=ffd686&versao=$versao'><img width='20px' src='./img/marcadorLaranja.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=9bff93&versao=$versao'><img width='20px' src='./img/marcadorVerde.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=fffe80&versao=$versao'><img width='20px' src='./img/marcadorAmarelo.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=apagar&versao=$versao'><img class='botaoExcluir' width='10px' src='./img/x.png'></a></p>";
                         
                    }else{
                        
                        echo "<p class='text-left verso'><font class='numeroVerso'>$verVer</font> <a style='background-color:#$cor'>$textoVer</a> <br><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=eeb5ff&versao=$versao'><img width='20px' src='./img/marcadorRoxo.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=7af7ff&versao=$versao'><img width='20px' src='./img/marcadorAzul.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=ffd686&versao=$versao'><img width='20px' src='./img/marcadorLaranja.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=9bff93&versao=$versao'><img width='20px' src='./img/marcadorVerde.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=fffe80&versao=$versao'><img width='20px' src='./img/marcadorAmarelo.png' class='pincel'></a></p>";
                        
                    }
                
                }else if(isset($row2) && $row2 == 1){
                    
                    $sql4 = mysqli_query($conn, "SELECT * FROM marcacoes WHERE id_usuario='$idUsuario' AND livro='$this->nome' AND capitulo='$this->capitulo' AND versiculo='$verVer'");
                    $row3 = mysqli_num_rows($sql4);
                    $linha = mysqli_fetch_array($sql4);
                    
                    $cor = $linha["cor"];
                    
                    if($row3 == 1){
                        
                        echo "<p class='text-left verso'><font class='numeroVerso'>$verVer</font> <a style='background-color:#$cor'>$textoVer</a> <br><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=eeb5ff&versao=$versao'><img width='20px' src='./img/marcadorRoxo.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=7af7ff&versao=$versao'><img width='20px' src='./img/marcadorAzul.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=ffd686&versao=$versao'><img width='20px' src='./img/marcadorLaranja.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=9bff93&versao=$versao'><img width='20px' src='./img/marcadorVerde.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=fffe80&versao=$versao'><img width='20px' src='./img/marcadorAmarelo.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=apagar&versao=$versao'><img class='botaoExcluir' width='10px' src='./img/x.png'></a></p>";
                        
                    }else{
                        
                        echo "<p class='text-left verso'><font class='numeroVerso'>$verVer</font> <a style='background-color:#ffbdbd'>$textoVer</a> <br><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=eeb5ff&versao=$versao'><img width='20px' src='./img/marcadorRoxo.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=7af7ff&versao=$versao'><img width='20px' src='./img/marcadorAzul.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=ffd686&versao=$versao'><img width='20px' src='./img/marcadorLaranja.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=9bff93&versao=$versao'><img width='20px' src='./img/marcadorVerde.png' class='pincel'></a><a href='./php/marcacoes.php?idusuario=$idUsuario&livro=$this->nome&capitulo=$this->capitulo&versiculo=$verVer&cor=fffe80&versao=$versao'><img width='20px' src='./img/marcadorAmarelo.png' class='pincel'></p>";
                        
                    }
                    
                }else {
                    
                    echo "<p class='text-left verso'><font class='numeroVerso'>$verVer</font> $textoVer <br><img width='20px' src='./img/marcadorRoxo.png' onclick='alertaCor()' class='pincel'><img width='20px' src='./img/marcadorAzul.png' onclick='alertaCor()' class='pincel'><img width='20px' src='./img/marcadorLaranja.png' onclick='alertaCor()' class='pincel'><img width='20px' src='./img/marcadorVerde.png' onclick='alertaCor()' class='pincel'><img width='20px' src='./img/marcadorAmarelo.png' onclick='alertaCor()' class='pincel'></p>";
                    
                }
                
            }
            
        }
        
    }
    
    public function avancarCapitulo($livro, $capitulo, $versao){
        
        $livroUrl = urlencode($livro);
        
        $versao2;
        
        if($versao == "aa"){
        
            $versao2 = 1;
        
        }else if($versao == "acf"){
            
            $versao2 = 2;
            
        }else if($versao == "nvi"){
            
            $versao2 = 3;
            
        }
        
        include "conexao.class.php";
        
        $somaCapitulo = $capitulo + 1;
        
        $sql = mysqli_query($conn, "SELECT * FROM livros WHERE liv_nome='$livro'");
        while ($row = mysqli_fetch_array($sql)) {
            
            $idLivro = $row["liv_id"];
            
            $sql2 = mysqli_query($conn, "SELECT ver_capitulo FROM versiculos WHERE ver_vrs_id='$versao2' AND ver_liv_id='$idLivro' ORDER By ver_capitulo DESC");
            $linha = mysqli_fetch_array($sql2);
            
            $cap = $linha["ver_capitulo"];
            
            if($somaCapitulo <= $cap){
                
                echo "<a href='./$livroUrl/$somaCapitulo/$versao'>$livro $somaCapitulo >></a>";
                
            }else{
                
                $somaLivro = $idLivro + 1;
                
                $sql3 = mysqli_query($conn, "SELECT * FROM livros WHERE liv_id='$somaLivro'");
                $linha2 = mysqli_fetch_array($sql3);
                
                $nome = $linha2["liv_nome"];
                
                $nomeUrl = urlencode($nome);
                
                if($nome == NULL){
                    
                    echo "";
                    
                }else{
                    
                    echo "<a href='./$nomeUrl/1/$versao'>$nome 1 >></a>";
                    
                }
                
            }
            
            
        }
        
    }
    
    public function voltarCapitulo($livro, $capitulo, $versao){
        
        $livroUrl = urlencode($livro);
        
        $versao2;
        
        if($versao == "aa"){
        
            $versao2 = 1;
        
        }else if($versao == "acf"){
            
            $versao2 = 2;
            
        }else if($versao == "nvi"){
            
            $versao2 = 3;
            
        }
        
        include "conexao.class.php";
        
        $somaCapitulo = $capitulo - 1;
        
        $sql = mysqli_query($conn, "SELECT * FROM livros WHERE liv_nome='$livro'");
        while ($row = mysqli_fetch_array($sql)) {
            
            $idLivro = $row["liv_id"];
            $idLivro2 = $row["liv_id"] - 1;
            
            $sql2 = mysqli_query($conn, "SELECT ver_capitulo FROM versiculos WHERE ver_vrs_id='$versao2' AND ver_liv_id='$idLivro' ORDER By ver_capitulo DESC");
            $linha = mysqli_fetch_array($sql2);
            
            $sql6 = mysqli_query($conn, "SELECT ver_capitulo FROM versiculos WHERE ver_vrs_id='$versao2' AND ver_liv_id='$idLivro2' ORDER By ver_capitulo DESC");
            $linha6 = mysqli_fetch_array($sql6);
            
            $cap = $linha["ver_capitulo"];
            $cap6 = $linha6["ver_capitulo"];
            
            if($somaCapitulo <= $cap && $somaCapitulo > 0){
                
                echo "<a href='./$livroUrl/$somaCapitulo/$versao'><< $livro $somaCapitulo</a>";
                
            }else{
                
                $somaLivro = $idLivro - 1;
                
                $sql3 = mysqli_query($conn, "SELECT * FROM livros WHERE liv_id='$somaLivro'");
                $linha2 = mysqli_fetch_array($sql3);
                
                $nome = $linha2["liv_nome"];
                
                $nomeUrl = urlencode($nome);
                
                if($nome == NULL){
                    
                    echo "";
                    
                }else{
                    
                    echo "<a href='./$nomeUrl/$cap6/$versao'><< $nome $cap6</a>";
                    
                }
                
            }
            
            
        }
        
    }
    
    public function salvarPassagem(){
        
        include "conexao.class.php";
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "UPDATE usuarios SET livro='$this->nome' WHERE id='$idUsuario'") or die("Erro salvar passagem");
        $sql = mysqli_query($conn, "UPDATE usuarios SET capitulo='$this->capitulo' WHERE id='$idUsuario'") or die("Erro salvar passagem");
        
    }
    
    public function retornaLivro(){
        
        include "conexao.class.php";
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$idUsuario'") or die("Erro retornaLivro");
        $linha = mysqli_fetch_array($sql);
        
        $livro = $linha["livro"];
        
        return $livro;
        
    }
    
    public function retornaCapitulo(){
        
        include "conexao.class.php";
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$idUsuario'") or die("Erro retornaCapitulo");
        $linha = mysqli_fetch_array($sql);
        
        $capitulo = $linha["capitulo"];
        
        return $capitulo;
        
    }
    
    public function retornaVersao(){
        
        include "conexao.class.php";
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$idUsuario'") or die("Erro retornaVersao");
        $linha = mysqli_fetch_array($sql);
        
        $versao = $linha["versao"];
        
        return $versao;
        
    }
    
    public function atualizarVersao($versao){
        
        include "conexao.class.php";
        
        $idUsuario = $_COOKIE["id_usuario"];
        
        $sql = mysqli_query($conn, "UPDATE usuarios SET versao='$versao' WHERE id='$idUsuario'") or die ("Erro atualizarVersao");
        
    }
    
}

?>