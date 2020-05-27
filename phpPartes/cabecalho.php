<?php

@$explode = explode("/", $_GET["url"]);

?>

<base href="http://localhost/biblia/public_html/V%20Nova/">

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/menu.js"></script>
<script type="text/javascript" src="js/menuCel.js"></script>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="cssPartes/cabecalho.css" type="text/css" media="all and (min-width: 1050px)">
<link rel="stylesheet" href="cssPartes/cabecalhoCel.css" type="text/css" media="all and (min-width: 0px) and (max-width: 1049px)">

<!--        Inserindo Bootstrap-->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        
        <?php
        
//        Iniciando classes
        
        include "classes/notificacao.class.php";
        $classeNotificacao = new notificacao();
        
        if(!isset($classeUsuarios)){
            
            include "classes/usuarios.class.php";
            $classeUsuarios = new usuarios();
            
        }
        
        ?>

<div id="barraTopo">
                
                <div id="cbarraTopo">
                    
                    <div id="cbarraTopo1">
                        
                        <img src="img/logo.png" class="logo" onclick="window.location='./'">
                        
                        <form name="busca" method="GET" action="php/buscadirect.php">
                            
                            <img src="img/lupa.png" class="imgLupa">
                            <input type="text" class="buscar" placeholder="Passagens e usuários" name="busca" required>
                            
                            
                            
                            <img src="img/iconeVertical.png" class="menuCel">
                            
                            <?php
                            
                            if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                            
                            ?>
                            
                            <a href="perfil/<?php
                            
                            echo $_COOKIE["nome_usuario"];
                            
                            ?>"><img style="cursor: pointer" src="img/<?php
                        
                        if($classeUsuario->retornaImagem() == NULL){
                            
                            echo"semImagem.jpg";
                            
                        }else{
                            
                            echo $classeUsuario->retornaImagem();
                            
                        }
                        
                        ?>" class="imgMenuAvatarCel"></a>
                        
                        <img src="img/<?php
                        
                        $classeNotificacao->id_usuarios_receber = $_COOKIE["id_usuario"];
                        
                        if($classeNotificacao->verificaQtdNotificacao() > 0){
                            
                            echo "iconeSinoVermelho.png";
                            
                        }else{
                            
                            echo "iconeSino.png";
                            
                        }
                        
                        ?>" class="sinoCel" data-toggle="modal" data-target="#modalNot">
                            
                            <?php
                            
                            }
                            
                            ?>
                            
                            <input type="hidden" name="versao" value="<?php
                            
                            @$explode = explode("/", $_GET["url"]);
                            
                            if(isset($explode[0]) && !isset($explode[1]) && !isset($explode[2]) && !isset($explode[3]) && !isset($explode[4])){
                                
                                if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){

                                    include "./classes/conexao.class.php";
        
                                    $idUsuario = $_COOKIE["id_usuario"];

                                    $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$idUsuario'") or die("Erro retornaVersao");
                                    $linha = mysqli_fetch_array($sql);

                                    $versao1 = $linha["versao"];

                                    echo $versao1;
                            
                                }else{

                                    echo "acf";

                                }
                                
                            }else if(isset($explode[0]) && isset($explode[1]) && !isset($explode[2]) && !isset($explode[3]) && !isset($explode[4])){
                                
                                echo $explode[1];
                                
                            }else if(isset($explode[0]) && isset($explode[1]) && isset($explode[2]) && !isset($explode[3]) && !isset($explode[4])){
                                
                                echo $explode[2];
                                
                            }else if(isset($explode[0]) && isset($explode[1]) && isset($explode[2]) && isset($explode[3]) && !isset($explode[4])){
                                
                                if($explode[0] == "anotacoes"){
                                    
                                    echo $explode[2];
                                    
                                }else{
                                    
                                    echo $explode[3];
                                    
                                }
                                
                            }else if(isset($explode[0]) && isset($explode[1]) && isset($explode[2]) && isset($explode[3]) && isset($explode[4])){
                                
                                if($explode[0] == "marcacoes"){
                                    
                                    echo $explode[2];
                                    
                                }else if($explode[0] == "busca"){
                                    
                                    echo $explode[3];
                                    
                                }
                                
                            }
                            
                            // ********************************************
                            
                            
                            
                            ?>">
                            
                        </form>
                        
                    </div>
                    
                    <?php
                    
                    if(!isset($_COOKIE["nome_usuario"]) && !isset($_COOKIE["email_usuario"]) && !isset($_COOKIE["id_usuario"])) {
                    
                    ?>
                    
                    <div id="cbarraTopo2">
                        
                        <table border="0px" cellpadding="0px" cellspacing="0px" class="tabelaLogin">
                            
                            <form name="login" action="php/setCookie.php" method="POST">
                            
                            <tr>
                                
                                <td class="campoLogin">
                                    
                                    E-mail <input required type="text" class="areaLogin" name="email">
                                    
                                </td>
                                
                                <td class="campoSenha">
                                    
                                    Senha <input required type="password" class="areaSenha" name="senha">
                                    
                                </td>
                                
                                <td class="areaBotao">
                                    
                                    <input type="submit" value="Entrar" class="botaoEntrar">
                                    
                                    </form>
                            
                            <button class="botaoCadastrar" title="Cadastrar ou Lembrar senha" onclick="window.location='cadastro'">Cadast</button>
                                    
                                </td>
                                
                            </tr>
                            
                        </table>
                        
                    </div>
                    
                    <?php
                    
                    } else {
                    
                    ?>
                    
                    <div id="cbarraTopoLogado">
                        
                        <img src="img/menu.png" class="imgMenuIcon">
                        
                        <?php
                        
                        $classeUsuario = new usuario();
                        
                        ?>
                        
                        <a href="perfil/<?php
                            
                            echo $_COOKIE["nome_usuario"];
                            
                            ?>"><img style="cursor: pointer" src="img/<?php
                        
                        if($classeUsuario->retornaImagem() == NULL){
                            
                            echo"semImagem.jpg";
                            
                        }else{
                            
                            echo $classeUsuario->retornaImagem();
                            
                        }
                        
                        ?>" class="imgMenu"></a>
                        
                        <img src="img/<?php
                        
                        $classeNotificacao->id_usuarios_receber = $_COOKIE["id_usuario"];
                        
                        if($classeNotificacao->verificaQtdNotificacao() > 0){
                            
                            echo "iconeSinoVermelho.png";
                            
                        }else{
                            
                            echo "iconeSino.png";
                            
                        }
                        
                        ?>" class="sino" data-toggle="modal" data-target="#modalNot">
                        
<!--                        <style>
                            
                            .imgAvatar{
                                
                                width: 29px;
                                height: 29px;
                                border-radius: 50%;
                                margin-top: 10px;
                                border: 2px solid #FFFFFF
                                
                            }
                            
                        </style>-->
                        
                        <?php
                        
                        echo $_COOKIE["nome_usuario"];
                        
                        ?>
                        
<!--                        <img src="img/menu.png" class="imgMenu">-->
                        
                    </div>
                    
                    <?php
                    
                    }
                    
                    ?>
                    
                </div>
    
    <div id="cMenu">
        
        <table border="0px" cellspacing='1px' cellpadding='10px'>
            
            <tr>
                
                <td><a href="anotacoes/todos/<?php
                
                    include "./classes/conexao.class.php";
        
                    $idUsuario = $_COOKIE["id_usuario"];

                    $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$idUsuario'") or die("Erro retornaVersao");
                    $linha = mysqli_fetch_array($sql);

                    $versao1 = $linha["versao"];

                    echo $versao1;
                
                ?>/1">Minhas anotações</a></td>
                
            </tr>
            
            <tr>
                
                <td><a href="marcacoes/todos/<?php
                
                    include "./classes/conexao.class.php";
        
                    $idUsuario = $_COOKIE["id_usuario"];

                    $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$idUsuario'") or die("Erro retornaVersao");
                    $linha = mysqli_fetch_array($sql);

                    $versao1 = $linha["versao"];

                    echo $versao1;
                
                ?>/cores/1">Minhas marcações</a></td>
                
            </tr>
            
            <tr>
                
                <td><a href="historico">Meu histórico</a></td>
                
            </tr>
            
            <tr>
                
                <td><a href="configuracoes">Configurações</a></td>
                
            </tr>
            
            <tr>
                
                <td><a href="php/sair.php">Sair</a></td>
                
            </tr>
            
            <tr>
                
                <td style="border-top: 2px dotted #007cae"><?php
                
                include "./classes/marcacao.class.php";
                
                $classeMarcacao = new marcacao();
                
                $verMarcacaoLivro1 = $classeMarcacao->verMarcacaoLivro1();
                $nomeLivro1 = urlencode($verMarcacaoLivro1);
                
                $verMarcacaoCapitulo1 = $classeMarcacao->verMarcacaoCapitulo1();
                
                echo "<a href='$nomeLivro1/$verMarcacaoCapitulo1/$versao1'><img src='./img/marcador.png' width='15px'> $verMarcacaoLivro1 $verMarcacaoCapitulo1</a>";
                
                ?></td>
                
            </tr>
            
            <tr>
                
                <td><?php
                
                $verMarcacaoLivro2 = $classeMarcacao->verMarcacaoLivro2();
                $nomeLivro2 = urlencode($verMarcacaoLivro2);
                
                $verMarcacaoCapitulo2 = $classeMarcacao->verMarcacaoCapitulo2();
                
                echo "<a href='$nomeLivro2/$verMarcacaoCapitulo2/$versao1'><img src='./img/marcador.png' width='15px'> $verMarcacaoLivro2 $verMarcacaoCapitulo2</a>";
                
                ?></td>
                
            </tr>
            
            <tr>
                
                <td><?php
                
                $verMarcacaoLivro3 = $classeMarcacao->verMarcacaoLivro3();
                $nomeLivro3 = urlencode($verMarcacaoLivro3);
                
                $verMarcacaoCapitulo3 = $classeMarcacao->verMarcacaoCapitulo3();
                
                echo "<a href='$nomeLivro3/$verMarcacaoCapitulo3/$versao1'><img src='./img/marcador.png' width='15px'> $verMarcacaoLivro3 $verMarcacaoCapitulo3</a>";
                
                ?></td>
                
            </tr>
            
        </table>
        
    </div>
                
            </div>

<div id="cMenuCel">
    
    <div id="areaTabelaCel">
        
    <?php

    if(!isset($_COOKIE["nome_usuario"]) && !isset($_COOKIE["email_usuario"]) && !isset($_COOKIE["id_usuario"])) {

    ?>
    
    <form name="login" action="php/setCookie.php" method="POST">
    
        <table border="0px" cellpadding="10px" class="tabelaLogin">
        
        <tr>
            
            <td>
                
                <font class="tituloLoginCel">E-mail</font>
                
            </td>
            <td>
                
                <input required type="text" class="areaLogin" name="email">
                
            </td>
            
        </tr>
        
        <tr>
            
            <td>
                
                <font class="tituloLoginCel">Senha</font>
                
            </td>
            <td>
                
                <input required type="password" class="areaSenha" name="senha">
                
            </td>
            
        </tr>
        
        <tr>
            
            <td></td>
            <td>
                
                <input type="submit" value="Entrar" class="botaoEntrar">
                
            </td>
            
        </tr>
        
    </table>
        
    </form>
    
    <button class="botaoCadastrar" title="Cadastrar ou Lembrar senha" onclick="window.location='cadastro'">Cadast</button>
    
    <?php
                    
    } else {

    ?>
    
    <table border="0px" cellspacing='1px' cellpadding='10px' class="tabelaLogadoCel">
            
            <tr>
                
                <td><a href="anotacoes/todos/<?php
                
                    include "./classes/conexao.class.php";
        
                    $idUsuario = $_COOKIE["id_usuario"];

                    $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$idUsuario'") or die("Erro retornaVersao");
                    $linha = mysqli_fetch_array($sql);

                    $versao1 = $linha["versao"];

                    echo $versao1;
                
                ?>/1">Minhas anotações</a></td>
                
            </tr>
            
            <tr>
                
                <td><a href="marcacoes/todos/<?php
                
                    include "./classes/conexao.class.php";
        
                    $idUsuario = $_COOKIE["id_usuario"];

                    $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE id='$idUsuario'") or die("Erro retornaVersao");
                    $linha = mysqli_fetch_array($sql);

                    $versao1 = $linha["versao"];

                    echo $versao1;
                
                ?>/cores/1">Minhas marcações</a></td>
                
            </tr>
            
            <tr>
                
                <td><a href="historico">Meu histórico</a></td>
                
            </tr>
            
            <tr>
                
                <td><a href="configuracoes">Configurações</a></td>
                
            </tr>
            
            <tr>
                
                <td><a href="php/sair.php">Sair</a></td>
                
            </tr>
            
            <tr>
                
                <td style="border-top: 2px dotted #007cae"><?php
                
                $verMarcacaoLivro1 = $classeMarcacao->verMarcacaoLivro1();
                $nomeLivro1 = urlencode($verMarcacaoLivro1);
                
                $verMarcacaoCapitulo1 = $classeMarcacao->verMarcacaoCapitulo1();
                
                echo "<a href='$nomeLivro1/$verMarcacaoCapitulo1/$versao1'><img src='./img/marcador.png' width='15px'> $verMarcacaoLivro1 $verMarcacaoCapitulo1</a>";
                
                ?></td>
                
            </tr>
            
            <tr>
                
                <td><?php
                
                $verMarcacaoLivro2 = $classeMarcacao->verMarcacaoLivro2();
                $nomeLivro2 = urlencode($verMarcacaoLivro2);
                
                $verMarcacaoCapitulo2 = $classeMarcacao->verMarcacaoCapitulo2();
                
                echo "<a href='$nomeLivro2/$verMarcacaoCapitulo2/$versao1'><img src='./img/marcador.png' width='15px'> $verMarcacaoLivro2 $verMarcacaoCapitulo2</a>";
                
                ?></td>
                
            </tr>
            
            <tr>
                
                <td><?php
                
                $verMarcacaoLivro3 = $classeMarcacao->verMarcacaoLivro3();
                $nomeLivro3 = urlencode($verMarcacaoLivro3);
                
                $verMarcacaoCapitulo3 = $classeMarcacao->verMarcacaoCapitulo3();
                
                echo "<a href='$nomeLivro3/$verMarcacaoCapitulo3/$versao1'><img src='./img/marcador.png' width='15px'> $verMarcacaoLivro3 $verMarcacaoCapitulo3</a>";
                
                ?></td>
                
            </tr>
            
        </table>
    
    <?php
    
    }
    
    ?>
    
    </div>
    
</div>

<div id="camadaMenu"></div>

<div class="modal fade" id="modalNot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Notificações</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
          <?php
          
          $classeNotificacao->id_usuarios_receber = $_COOKIE["id_usuario"];
          
          if($classeNotificacao->retornaNotificacao() == FALSE){ ?>
              
                <div class="row border-bottom p-3 notificacao">
              
                    <div class="col">

                        <label>Sem nunhuma notificação</label>

                    </div>

                </div>
              
          <?php }else{
              
            foreach ($classeNotificacao->retornaNotificacao() as $arrNotificacao){
                
            $classeUsuarios->idUsuario = $arrNotificacao["id_usuarios"];
          
          ?>
        
          <a class="aNotificacao" href="php/notificacaoApagar.php?idNoti=<?php echo $arrNotificacao["id"] ?>&usuario=<?php echo $classeUsuarios->retornaNomePeloComentario(); ?>"><div class="row border-bottom p-3 notificacao">
              
              <div class="col-3">
                  
                  <img style="cursor: pointer;" src="img/<?php
                  
                  if($classeUsuarios->retornaImagem() == false){
                      
                      echo "semImagem.jpg";
                      
                  }else{
                      
                      echo $classeUsuarios->retornaImagem();
                      
                  }
                  
                  ?>" class="imgNoti">
                  
              </div>
              
              <div class="col-9">
                  
                  <label style="cursor: pointer;"><font class="text-primary"><?php
                  
                  echo $classeUsuarios->retornaNomePeloComentario();
                  
                  ?></font> <?php
                  
                  echo $arrNotificacao["texto"];
                  
                  ?></label><br>
                  <small><?php
                  
                  $diaNotificacao = substr($arrNotificacao["data_notificacao"], 8, 2);
                  $mesNotificacao = substr($arrNotificacao["data_notificacao"], 5, 2);
                  $anoNotificacao = substr($arrNotificacao["data_notificacao"], 0, 4);
                  
                  echo "$diaNotificacao/$mesNotificacao/$anoNotificacao";
                  
                  ?></small>
                  
              </div>
              
              </div></a>
          
          <?php
          
          }
            
          }
          
          ?>
          
          <div class="row mt-2">
              
              <div class="col text-right">
                  
                  <a href="php/notificacaoLimparTudo.php">Limpar Tudo</a>
                  
              </div>
              
          </div>
          
      </div>
    </div>
  </div>
</div>