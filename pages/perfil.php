<?php

include "php/loginFalse.php";

@$explode = explode("/", $_GET["url"]);

?>

<!-- Título do projeto: Anotações bíblicas
Descrição: Página inicial do projeto
Autor: Erick Mota
Versão: Alfa
Última atualização 21/08/2018 - 01:34 -->

<html>
    <head>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131731981-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131731981-1');
</script>

<!--Adsense-->

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-4017917532228962",
          enable_page_level_ads: true
     });
</script>
        
        <title>
            
            <?php
            
            echo $explode[1]." - Anotações Bíblicas";
            
            ?>
            
        </title>
        <?php
        
            include_once './php/configBase.php';
        
        ?>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/icone.png" />
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/perfil.css" type="text/css" media="all and (min-width: 1050px)">
        <link rel="stylesheet" href="css/perfilCel.css" type="text/css" media="all and (min-width: 0px) and (max-width: 1049px)">
        
        <!--        Inserindo Bootstrap-->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        
        <?php
        
//        Iniciando as classes
        
        include "classes/usuarios.class.php";
        $classeUsuarios = new usuarios();
        
        include "classes/texto.class.php";
        $classeTexto = new texto();
        
        include "classes/comentario2.class.php";
        $classeComentario2 = new comentario2();
        
        ?>
        
    </head>
    
    <body>
        <div id="corpo" align="center">
            
            <!-- Início da barra inicial ********************************** -->
        
            <?php
            
            include 'phpPartes/cabecalho.php';
            
            ?>
            
            <!-- Início do conteúdo da página (passagens bíblicas) ******* -->
            
            <div id="conteudo">
                
                <div class="container-fluid mt-5">
                    
                    <div class="row">
                        
                        <?php
                            
                        $classeUsuarios->nome = $explode[1];

                        foreach ($classeUsuarios->retornaDadosUsuario() as $arrUsuarios){

                        ?>
                        
                        <div class="col-md-4">
                            
                            <?php
                            
                            if($arrUsuarios["img"] != NULL){
                            
                            ?>
                            
                            <img src="img/<?php echo $arrUsuarios["id"] ?>avatar.jpg" class="imgAvatar shadow p-1 float-md-left">
                            
                            <?php
                            
                            }else{
                            
                            ?>
                            
                            <img src="img/semImagem.jpg" class="imgAvatar shadow p-1 float-md-left">
                            
                            <?php
                            
                            }
                            
                            ?>
                            
                        </div>
                        
                        <div class="col-md-7 ml-md-2 ml-0">
                            
                            <div class="row mt-md-0 mt-4">
                                
                                <h1 class="text-left">
                                    
                                    <?php
                                    
                                    echo $explode[1];
                                    
                                    ?>
                                    
                                </h1>
                                
                            </div>
                            
                            <div class="row">
                                
                                <small class="text-success">* <b><?php echo $classeUsuarios->retornaQtdSeguindo($arrUsuarios["id"]) ?></b> Seguindo /</small>&nbsp;
                                <small style="cursor:pointer" class="text-danger" data-toggle="modal" data-target="#modalExemplo">Denunciar perfil</small>
                                
                            </div>
                            
                            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Denunciar perfil</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      
                                        <form method="post" action="php/emailDenunciar.php">
                                            <div class="form-group text-left">
                                              <label for="recipient-email" class="col-form-label">Seu e-mail:</label>
                                              <input type="email" class="form-control" required name="emailOrigem" id="recipient-email">
                                            </div>
                                            <div class="form-group text-left">
                                              <label for="message-text" class="col-form-label">Problema do perfil:</label>
                                              <textarea class="form-control" name="texto" rows="3" required id="message-text" placeholder="Por favor, informe qual o problema do perfil."></textarea>
                                              <input type="hidden" name="perfil" value="<?php echo $explode[1]; ?>">
                                            </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                      <input type="submit" class="btn btn-primary" value="Enviar">
                                      </form>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                
                                <p class="text-left mt-3"><?php
                                
                                echo $arrUsuarios["sobre"];
                                
                                ?></p>
                                
                            </div>
                            
                            <div class="row">
                                
                                <small class="text-info">Siga para: ver anotações primeiro, ler capítulo usando esse perfil</small>
                                
                            </div>
                            
                            <div class="row mt-4">
                                
                                <div class="col-sm-3 mb-4 mb-sm-0 pb-3">
                                    
                                    <?php
                                    
                                    if(isset($_COOKIE["id_usuario"])){
                                        
                                        if($_COOKIE["id_usuario"] == $arrUsuarios["id"]){ ?>
                                            
                                            <button type="button" class="btn btn-primary" disabled>Seguir</button>
                                            
                                        <?php }else{
                                            
                                            $classeUsuarios->idUsuario = $_COOKIE["id_usuario"];
                                    
                                            if($classeUsuarios->verificaSeguirJaSeguindo($arrUsuarios["id"]) == true){ ?>

                                                <a href="php/enviarSeguir.php?seguidor=<?php echo $_COOKIE["id_usuario"]; ?>&seguindo=<?php echo $arrUsuarios["id"]; ?>&nome=<?php echo $explode[1]; ?>"><button type="button" class="btn btn-primary active">Seguindo</button></a>

                                            <?php }else{ ?>

                                                <a href="php/enviarSeguir.php?seguidor=<?php echo $_COOKIE["id_usuario"]; ?>&seguindo=<?php echo $arrUsuarios["id"]; ?>&nome=<?php echo $explode[1]; ?>"><button type="button" class="btn btn-primary">Seguir</button></a>

                                            <?php }
                                            
                                        }
                                        
                                    }else{ ?>
                                        
                                        <button type="button" class="btn btn-primary" disabled>Seguir</button>
                                        
                                    <?php }
                                    
                                    ?>
                                    
                                </div>
                                
                                <div class="col-4 col-sm-3">
                                    
                                    <img src="img/icone-balao.png" width="35px"> <b><?php
                                    
                                    $classeUsuarios->idUsuario = $arrUsuarios["id"];
                                    
                                    echo $classeUsuarios->retornaAnotacao("comentarios");
                                    
                                    ?></b>
                                    
                                </div>
                                
                                <div class="col-4 col-sm-3">
                                    
                                    <img src="img/icone-pessoas.png" width="35px"> <b><?php
                                    
                                    echo $classeUsuarios->retornaAnotacaoPublica("comentarios");
                                    
                                    ?></b>
                                    
                                </div>
                                
                                <div class="col-4 col-sm-3">
                                
                                    <img src="img/icone-caneta.png" width="35px"> <b><?php
                                    
                                    echo $classeUsuarios->retornaAnotacao("marcacoes");
                                    
                                    ?></b>
                                
                                </div>
                                
                            </div>
                            
                            <?php
                            
                            }
                            
                            ?>
                            
                        </div>
                        
                    </div>
                    
                    <?php
                    
                    if($classeUsuarios->retornaUltimasAnotacoesPublicas() != NULL){
                    
                    ?>
                    
                    <div class="row mt-5">
                    
                        <h2 class="text-left">Anotações Públicas</h2>
                    
                    </div>
                    
                    <div class="row">
                        
                        <p class="text-info text-left">* Veja as 10 útimas anotações públicas de <?php echo $explode[1]; ?>. Siga ele(a) para ver suas anotações nas primeiras posições da sua leitura bíblica!</p>
                        
                    </div>
                    
                    <?php
                    
                    foreach($classeUsuarios->retornaUltimasAnotacoesPublicas() as $arrAnotacao){
                    
                    ?>
                    
                    <div class="row mt-3">
                        
                        <p class="text-left verso"><?php
                        
                        $numeroVersao = $classeTexto->retornaNumeroVersao("acf");
                        $numeroLivro = $classeTexto->retornaNumeroLivro($arrAnotacao["livro"]);
                        
                        $classeTexto->versao = $numeroVersao;
                        $classeTexto->livro = $numeroLivro;
                        $classeTexto->capitulo = $arrAnotacao["capitulo"];
                        $classeTexto->verso = $arrAnotacao["numero_versiculo"];
                        
                        echo $arrAnotacao["livro"]." ".$arrAnotacao["capitulo"].":".$arrAnotacao["numero_versiculo"]." - ".$classeTexto->retornaVerso();
                        
                        ?></p>
                        
                    </div>
                    
                    <div class="row">
                        
                        <p class="text-left text-secondary"><?php
                        
                        $explodeAnotacao = explode(" ", $arrAnotacao['texto']);
                        $qtdAnotacao = count($explodeAnotacao);
                        
                        $i = 0;
                        
                        while($i <= 90){
                            
                            if(preg_match('/^http:/', @$explodeAnotacao[$i]) or preg_match('/^https:/', @$explodeAnotacao[$i])){
                                    
                                echo "<a style='color: #00a8ec' href='$explodeAnotacao[$i]' target='_blank'>$explodeAnotacao[$i]</a> ";

                            }else{

                                echo @$explodeAnotacao[$i]." ";

                            }
                            
                            $i++;
                            
                        }
                        
                        if($qtdAnotacao > 90){
                            
                            echo "... <a href='' data-toggle='modal' data-target='.bd-modal-anotacao".$arrAnotacao["livro"].$arrAnotacao["capitulo"].$arrAnotacao["numero_versiculo"]."-lg'>Ver mais</a>";
                            
                        }
                        
                        ?></p>
                        
                        <div class="<?php echo "modal fade bd-modal-anotacao".$arrAnotacao['livro'].$arrAnotacao['capitulo'].$arrAnotacao['numero_versiculo']."-lg"; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title text-left" id="exampleModalLabel"><?php
                                  
                                  echo $arrAnotacao["livro"]." ".$arrAnotacao["capitulo"].":".$arrAnotacao["numero_versiculo"]." - ".$classeTexto->retornaVerso();
                                  
                                  ?></h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body"><p class="text-left"><?php
                                
                                $i = 0;
                        
                                while($i <= $qtdAnotacao){
                                    
                                    if(preg_match('/^http:/', @$explodeAnotacao[$i]) or preg_match('/^https:/', @$explodeAnotacao[$i])){
                                    
                                        echo "<a style='color: #00a8ec' href='$explodeAnotacao[$i]' target='_blank'>$explodeAnotacao[$i]</a> ";
                                    
                                    }else{
                                    
                                        echo @$explodeAnotacao[$i]." ";
                                    
                                    }

                                    $i++;

                                }
                                
                                ?></p></div>
                              </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="row border-bottom">
                        
                        <div class="col">
                            
                            <p class="text-right"> <label style="cursor:pointer" class="text-warning" data-toggle="modal" data-target="#modalDenunciarComentario">Denunciar</label> <img style="cursor:pointer" data-toggle="modal" data-target="#modalDenunciarComentario" src="img/icone-atencao.png" width="21px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php
                            
                            if(isset($_COOKIE["id_usuario"])){
                                
                                if($_COOKIE["id_usuario"] == $arrAnotacao["id_usuario"]){ ?>
                                    
                                    <img src="img/coracaoRosa.png" width="23px">
                                    
                                <?php }else{
                                    
                                    $classeComentario2->idUsuario = $_COOKIE["id_usuario"];
                                    $classeComentario2->idComentario = $arrAnotacao["id"]; ?>
                                    
                                    <script>
                                        
                                    function mudarCoracao<?php echo $arrAnotacao['id']; ?>(){

                                        var conteudoSrc = document.getElementById("coracaoRosa<?php echo $arrAnotacao['id']; ?>").src;

                                        if(conteudoSrc === "<?php include "php/configLink.php"; ?>/img/coracaoRosa.png"){

                                            document.getElementById("coracaoRosa<?php echo $arrAnotacao['id']; ?>").src="img/coracaoVerde.png";

                                        }else{

                                            document.getElementById("coracaoRosa<?php echo $arrAnotacao['id']; ?>").src="img/coracaoRosa.png";

                                        }

                                    }

                                    </script>
                                    
                                    <?php
                                    
                                    if($classeComentario2->verificaLikeJaComentado() == true){ ?>
                                        
                                        <img style="cursor:pointer" src="img/coracaoVerde.png" id="coracaoRosa<?php echo $arrAnotacao['id']; ?>" onclick="mudarCoracao<?php echo $arrAnotacao['id']; ?>()" width="23px">
                                        
                                    <?php }else{ ?>
                                        
                                        <img style="cursor:pointer" src="img/coracaoRosa.png" id="coracaoRosa<?php echo $arrAnotacao['id']; ?>" onclick="mudarCoracao<?php echo $arrAnotacao['id']; ?>()" width="23px">
                                        
                                    <?php }
                                    
                                }
                                
                            }else{ ?>
                                
                                <img src="img/coracaoRosa.png" width="23px">
                                
                            <?php }
                            
                            ?> <label class="text-black-50" id="qtdLike<?php echo $arrAnotacao['id']; ?>"><?php
                            
                            $classeComentario2->idComentario = $arrAnotacao['id'];
                            
                            echo $classeComentario2->retornaQtdLike();
                            
                            ?></label></p>
                            
                            <div class="modal fade" id="modalDenunciarComentario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Denunciar comentario</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      
                                        <form method="post" action="php/emailDenunciarComentario.php">
                                            <div class="form-group text-left">
                                              <label for="recipient-email" class="col-form-label">Seu e-mail:</label>
                                              <input type="email" class="form-control" required name="emailOrigem" id="recipient-email">
                                            </div>
                                            <div class="form-group text-left">
                                              <label for="message-text" class="col-form-label">Problema do comentário:</label>
                                              <textarea class="form-control" name="texto" rows="3" required id="message-text" placeholder="Por favor, informe qual o problema do comentário."></textarea>
                                              <input type="hidden" name="idComentario" value="<?php echo $arrAnotacao["id"]; ?>">
                                              <input type="hidden" name="textoComentario" value="<?php echo $arrAnotacao["texto"]; ?>">
                                            </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                      <input type="submit" class="btn btn-primary" value="Enviar">
                                      </form>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <script type="text/javascript">
                        
                        function insereLike<?php echo $arrAnotacao['id']; ?> (usuario, id_usuario_anotacao, comentario) {
	
                            $.ajax({

                                type: "POST",
                                dataType: "html",

                                url: "php/enviarLike.php",

                                beforeSend: function () {

                                    $("#loading").html("<img class='imgLoading' src='img/loading.gif'>");

                                },

                                data: {usuario: usuario, id_usuario_anotacao: id_usuario_anotacao, comentario: comentario},

                                success: function (msg) {

                                    $("#qtdLike<?php echo $arrAnotacao['id']; ?>").html(msg)

                                }

                            });

                        }

                        $("#coracaoRosa<?php echo $arrAnotacao['id']; ?>").click(function(){

                            insereLike<?php echo $arrAnotacao['id']; ?>(<?php echo $_COOKIE["id_usuario"]; ?>, <?php echo $arrAnotacao['id_usuario']; ?>, <?php echo $arrAnotacao['id']; ?>)

                        });
                        
                        </script>
                        
                    </div>
                    
                    <?php
                    
                    }
                    
                    }
                    
                    ?>
                    
                </div>
                
            </div>
            
            <!-- Início do rodapé e livros ******************************* -->
            
            <?php
            
            include 'phpPartes/rodape.php';
            
            ?>
        
        </div>
    </body>
</html>
