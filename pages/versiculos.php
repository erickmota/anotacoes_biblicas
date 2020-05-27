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
            
            $livroTitulo = $explode[0];
            $capituloTitulo = $explode[1];
            $versiculoTitulo = $explode[2];
            $versaoTitulo = $explode[3];
            
            echo "$livroTitulo $capituloTitulo:$versiculoTitulo - $versaoTitulo - Anotações Bíblicas";
            
            ?>
            
        </title>
        <?php
        
            include_once './php/configBase.php';
        
        ?>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/icone.png" />
        <meta name="viewport" content="width=device-width">
<!--        <script type="text/javascript" src="js/jquery.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
        <link rel="stylesheet" href="css/versiculos.css" type="text/css" media="all and (min-width: 1050px)">
        <link rel="stylesheet" href="css/versiculosCel.css" type="text/css" media="all and (min-width: 0px) and (max-width: 1049px)">
        
        <script type="text/javascript">
        
        function alerta(){
            
            alert("Você precisa estar logado, para salvar e apagar anotações !");
            
        }
        
        function alertaCor(){
            
            alert("Você precisa estar logado, para realizar marcações !");
            
        }
        
        </script>
        
        <meta name="description" content="Leia <?php echo "$livroTitulo $capituloTitulo:$versiculoTitulo"; ?> - Bíblia online para realizar anotações e marcações. Anote marque e estude, em 3 versões diferentes.">
        <meta name="keywords" content="Bíblia online, Anotações bíblicas, Marcações bíblicas, Estudo, Marcação, Anotação, versículos, capítulos, bíblia de estudo, bíblia para estudo, <?php echo "$livroTitulo $capituloTitulo:$versiculoTitulo"; ?>">
               
        <!--        Inserindo Bootstrap-->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        
        <?php
        
//        Iniciando classes
        
        include "classes/comentario2.class.php";
        $classeComentario2 = new comentario2();
        
        include "classes/usuarios.class.php";
        $classeUsuarios = new usuarios();
        
        include "classes/texto.class.php";
        $classeTexto = new texto();
        
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
                
                <div id="cConteudo">
                    
                    <div id="espacoPC">
                    
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- AB - Versículos - PC -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:1024px;height:96px"
                         data-ad-client="ca-pub-4017917532228962"
                         data-ad-slot="2733164268"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    
                </div>
                
                <div id="espacoCelular">
                    
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- AB - Versículos - Celular -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:320px;height:90px"
                         data-ad-client="ca-pub-4017917532228962"
                         data-ad-slot="4126136984"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    
                </div>
                    
                    <h1 class="text-left mt-5">
                        
                        <?php
                        
                        $livro = $explode[0];
                        $capitulo = $explode[1];
                        $versiculo = $explode[2];
                        
                        include 'classes/exibirCapitulo.class.php';
                        
                        $capitulos = new exibirCapitulo();
                        
                        $capitulos->nome = $livro;
                        $capitulos->capitulo = $capitulo;
                        
                        echo "$capitulos->nome $capitulos->capitulo";
                        
                        ?>
                        
                    </h1>
                    
                    <script>
        
        function selecionarVersao(livro){
            
            window.location=livro;
            
        }
        
        </script>
        
        <p class="text-left">
                    
                    <select class='versao' onchange="selecionarVersao(this.value)">
                        
                        <?php
                        
                        $livroUrl = urlencode($capitulos->nome);
                        
                        ?>
                        
                        <option value="<?php echo "$livroUrl/$capitulos->capitulo/$versiculo/aa"; ?>" <?php
                            
                            if($explode[3] == "aa"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?>>Almeida Atualizada - AA</option>
                        
                        <option value="<?php echo "$livroUrl/$capitulos->capitulo/$versiculo/acf"; ?>" <?php
                            
                            if($explode[3] == "acf"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?>>Almeida Corrigida e Fiel - ACF</option>
                        <option value="<?php echo "$livroUrl/$capitulos->capitulo/$versiculo/nvi"; ?>" <?php
                            
                            if($explode[3] == "nvi"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?>>Nova Versão Internacional - NVI</option>
                        
                    </select>
            
        </p>
                    
                    <?php
                    
                    $verso = $explode[2];
                    @$versao = $explode[3];
                    
                    $capitulos->exibirVersiculo($verso, @$explode[3]);
                    
                    ?>
                    
                    <?php
                    
                    if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])) {
                    
                    ?>
                    
                    <div id="row">
                    
                        <form name="comentario" method="POST" action="
                              
                              <?php
                              
                              $versiculo = $explode[2];
                              
                              echo "$livro/$capitulo/$versiculo/$versao";
                              
                              ?>
                              
                              ">
                            
<!--                        Esse <a> está aqui para impedir o erro de ficar marcando
                            o versículo na cor amarela, ao clicar no textarea-->
                            
                            <a><textarea class="form-control" rows="3" placeholder="Faça uma anotação. Use uma barra | para gerar uma quebra de linha ou um # para criar um tópico. Exemplo #Salvação" name="comentario" required="csc" title="Ao usar a barra ('|'), você gera uma quebra de linha, para visualização das anotações na página principal."><?php
                            
                                $idUsuario = $_COOKIE["id_usuario"];

                                include 'classes/comentarios.class.php';

                                $classComentario = new comentarios();

                                $classComentario->idUsuario = $idUsuario;

                                $classComentario->livro = $livro;

                                $classComentario->capitulo = $capitulo;

                                $classComentario->numeroVersiculo = $versiculo;
                                
                                echo $classComentario->verificarExistenciaComentario();
                            
                                ?></textarea></a>
                            
                            <a><font class="dataComentario">
                                
                                Anotação efetuada em: <?php
                                
                                echo $classComentario->retornarData();
                                
                                ?>
                                
                                </font></a>
                            
                            <input type="submit" value="Salvar" class="btn btn-primary btn-sm botaoSalvar">
                            
                            <a href="<?php
                        
                            echo "php/botaoApagar.php?idusuario=$idUsuario&livro=$livro&capitulo=$capitulo&versiculo=$versiculo&versao=$versao";

                            ?>"><input type="button" class="btn btn-danger btn-sm botaoApagar" value="Apagar"></a>
                            
                            <div class="btn-group btn-group-toggle float-right area-btn-publico-privado" data-toggle="buttons">
                                <label class="btn btn-secondary btn-sm <?php
                                    
                                        if($classComentario->verificaPrivacidadeComentario() == "publico"){
                                            
                                            echo "active";
                                            
                                        }
                                    
                                    ?> btn-publico-privado">
                                    <input type="radio" name="privacidade" value="publico" id="option2" autocomplete="off" required <?php
                                    
                                        if($classComentario->verificaPrivacidadeComentario() == "publico"){
                                            
                                            echo "checked";
                                            
                                        }
                                    
                                    ?>> Público
                                </label>
                                <label class="btn btn-secondary btn-sm <?php
                                    
                                        if($classComentario->verificaPrivacidadeComentario() == "privado"){
                                            
                                            echo "active";
                                            
                                        }
                                    
                                    ?> btn-publico-privado">
                                  <input type="radio" name="privacidade" value="privado" id="option3" autocomplete="off" required <?php
                                    
                                        if($classComentario->verificaPrivacidadeComentario() == "privado"){
                                            
                                            echo "checked";
                                            
                                        }
                                    
                                    ?>> Privado
                                </label>
                            </div>
                            
                            <div class="btn-group dropleft float-right mr-lg-4 mr-1 area-btn-conf">
                                <img class="dropdown-toggle icone-conf" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" width="30px" src="img/icone-configuracao.png">
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <a class="dropdown-item btn-sinalizar" onclick="if (window.confirm('Tem certeza que deseja sinalizar esse versículo aos administradores?')) {window.location='php/sinalizarVerso.php?livro=<?php echo $livro ?>&capitulo=<?php echo $capitulo ?>&verso=<?php echo $versiculo ?>&versao=<?php echo $versao ?>'} else {}"><img src="img/icone-atencao.png" width="20px"> &nbsp; Infomar erro no versículo</a>
                                    <div class="dropdown-divider"></div>
                                    <p class="p-2 text-center text-secondary">
                                        Clique no botão acima, para informar aos adiministradores erros no versículo, como tradução, formatação ou acentuação!
                                    </p>
                                </div>
                            </div>
                    
                        </form>
                        
<!--                        <img onclick="if (window.confirm('Deseja sinalizar esse versículo, como contendo erros de tradução, formatação ou acentuação?')) {window.location='php/sinalizarVerso.php?livro=<?php echo $livro ?>&capitulo=<?php echo $capitulo ?>&verso=<?php echo $versiculo ?>&versao=<?php echo $versao ?>'} else {}" title="Sinalizar versículo, como contendo erros de formatação, tradução ou acentuação." class="iconeDanger" src="https://img.icons8.com/color/30/000000/box-important.png">-->

                    </div>
                    
                    <?php
                    
                    }else {
                        
                    ?>
                    
                    <div id="cComentario">
                    
                        <form name="comentario">
                    
                            <a><textarea class="form-control" rows="3" placeholder="Crie uma conta, ou faça seu login para realizar comentários!" name="comentario" disabled></textarea></a>
                            
                            <a><font class="dataComentario">
                                
                                Anotação efetuada em: (Deslogado)
                                
                                </font></a>
                            
                            <input type="submit" value="Salvar" class="btn btn-primary btn-sm botaoSalvar" disabled>
                            
                            <input type="button" class="btn btn-danger btn-sm botaoApagar" value="Apagar" disabled>
                            
                            <div class="btn-group btn-group-toggle float-right area-btn-publico-privado" data-toggle="buttons">
                                <label class="btn btn-secondary btn-sm btn-publico-privado">
                                    <input type="radio" name="privacidade" value="publico" id="option2" autocomplete="off" required disabled> Público
                                </label>
                                <label class="btn btn-secondary btn-sm btn-publico-privado">
                                  <input type="radio" name="privacidade" value="privado" id="option3" autocomplete="off" required disabled> Privado
                                </label>
                            </div>
                            
                            <div class="btn-group dropleft float-right mr-lg-4 mr-1 area-btn-conf">
                                <img class="dropdown-toggle icone-conf" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" width="30px" src="img/icone-configuracao.png">
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <a class="dropdown-item btn-sinalizar" onclick="if (window.confirm('Tem certeza que deseja sinalizar esse versículo aos administradores?')) {window.location='php/sinalizarVerso.php?livro=<?php echo $livro ?>&capitulo=<?php echo $capitulo ?>&verso=<?php echo $versiculo ?>&versao=<?php echo $versao ?>'} else {}"><img src="img/icone-atencao.png" width="20px"> &nbsp; Infomar erro no versículo</a>
                                    <div class="dropdown-divider"></div>
                                    <p class="p-2 text-center text-secondary">
                                        Clique no botão acima, para informar aos adiministradores erros no versículo, como tradução, formatação ou acentuação!
                                    </p>
                                </div>
                            </div>
                    
                        </form>
                        
                    </div>
                    
                    <?php
                        
                    }
                    
                    ?>
                    
                    <?php
                    
                    if(isset($_POST["comentario"])){
                        
                        $comentario = $_POST["comentario"];
                        $privacidade = $_POST["privacidade"];
                        
                        $classComentario->texto = $comentario;
                        $classComentario->privacidade = $privacidade;
                        
                        $classComentario->cadastrarComentarios();
                        
                    }
                    
                    ?>
                    
                    <div class="row" id="voltarAvancar">
                        
                        <a style="text-decoration: none;" class="linkVoltar" href="<?php
                        
                        $versiculoInt = intval($versiculo);
                        
                        $versiculoSoma = $versiculoInt - 1;
                        
                        $livroUrl2 = urlencode($livro);
                        
                        echo "$livroUrl2/$capitulo/$versao#$versiculoSoma";
                        
                        ?>"><?php
                        
                        echo "<< $livro $capitulo";
                        
                        ?></a>
                        
                    </div>
        
                    <div class="row border-bottom">

                        <div class="col">
                            
                            <h3 class="text-left mt-5">
                                
                                O que outros usuários estão comentando.
                                
                            </h3>
                            
                        </div>

                    </div>
        
<!--                    <div class="row mt-3">

                        <div class="col">
                            
                            <p class="text-info">
                                
                                Seja o primeiro a comentar publicamente esse versículo, e ajude outras pessoas!
                                
                            </p>
                            
                        </div>

                    </div>-->

                    <?php
                    
                    if($classeComentario2->retornaComentario($livroTitulo, $capituloTitulo, $versiculoTitulo) == FALSE){?>
                        
                        <div class="row mt-3">

                        <div class="col">
                            
                            <p class="text-info">
                                
                                Seja o primeiro a comentar publicamente esse versículo, e ajude outras pessoas!
                                
                            </p>
                            
                        </div>

                        </div>
                        
                    <?php }else{

                    ?>
        
                    <div class="row mt-3">

                        <div class="col">
                            
                            <p class="text-secondary text-left font-weight-light">
                                
                                <img src="img/icone-atencao.png" width="20px"> &nbsp; Lembre-se, os comentários abaixo são de usuários ativos do Anotações Bíblicas, então como os bereanos (Atos 17:11), sempre confira se tudo está de acordo com as escrituras. Recomendamos um estudo mais profundo com a ajuda do agregador de conteúdo <a href="http://www.pelagraca.com.br/" target="_blank">Pela Graça</a>
                                
                            </p>
                            
                        </div>

                    </div>

                    <?php
                    
//                    Comentarios de seguidores
                    
                    foreach ($classeComentario2->retornaComentario($livroTitulo, $capituloTitulo, $versiculoTitulo) as $arrComentario2){
                    
                    ?>

                    <div class="row mt-3 mb-4 <?php
                    
                    if(isset($_COOKIE["id_usuario"])){
                        
                        $classeComentario2->idUsuario = $_COOKIE["id_usuario"];
                        $classeComentario2->idComentario = $arrComentario2["id"];
                        
                        if($classeComentario2->verificaComentarioSeguidorOuNao() == true){
                            
                            
                            
                        }else{
                            
                            echo "d-none";
                            
                        }
                        
                    }else{
                        
                        echo "d-none";
                        
                    }
                    
                    ?>">
                            
                        <div class="col-md-1 col-2">
                            
                            <?php
                            
                            $classeUsuarios->idUsuario = $arrComentario2["id_usuario"];
                            
                            if($classeUsuarios->retornaImagem() == FALSE){ ?>
                                
                                <img src="img/semImagem.jpg" class="float-left img-avatar mt-2 shadow-sm">
                                
                            <?php }else{ ?>
                                
                                <img src="img/<?php echo $arrComentario2["id_usuario"]; ?>avatar.jpg" class="float-left img-avatar mt-2 shadow-sm">
                                
                            <?php }
                            
                            ?>
                            
                        </div>

                        <div class="col-md-11 col-10">
                            
                            <div class="row">
                                
                                <div class="col">
                                    
                                    <p class="text-left text-secondary">
                                        
                                        <?php
                                        
                                        if(isset($_COOKIE["id_usuario"])){
                                            
                                            $classeUsuarios->idUsuario = $_COOKIE["id_usuario"];
                                            
                                            if($classeUsuarios->verificaSeguirJaSeguindo($arrComentario2["id_usuario"]) == true){ ?>
                                                
                                                <img src="img/iconeSeguindo.png" width="20px">
                                                
                                            <?php }
                                            
                                        }
                                        
                                        ?>
                                        
                                        <a class="text-primary font-weight-bold" href="perfil/<?php $classeUsuarios->idUsuario = $arrComentario2["id_usuario"]; echo $classeUsuarios->retornaNomePeloComentario() ?>"><?php $classeUsuarios->idUsuario = $arrComentario2["id_usuario"]; echo $classeUsuarios->retornaNomePeloComentario() ?>:</a> <?php
                                        
                                        $explodeAnotacao = explode(" ", $arrComentario2['texto']);
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
                            
                                            echo "... <a href='' data-toggle='modal' data-target='.bd-modal-anotacaoSeguidor".$arrComentario2["livro"].$arrComentario2["capitulo"].$arrComentario2["numero_versiculo"].$classeUsuarios->retornaNomePeloComentario()."-lg'>Ver mais</a>";

                                        }
                                        
                                        ?> 
                                        
                                    </p>
                                    
                                </div>
                                
                            </div>
                            
                            <div class="row border-bottom">
                        
                                <div class="col">

                                    <p class="text-right"> <label style="cursor:pointer" class="text-warning" data-toggle="modal" data-target="#modalDenunciarComentarioSeguidor">Denunciar</label> <img style="cursor:pointer" data-toggle="modal" data-target="#modalDenunciarComentarioSeguidor" src="img/icone-atencao.png" width="21px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php
                            
                                    if(isset($_COOKIE["id_usuario"])){

                                        if($_COOKIE["id_usuario"] == $arrComentario2["id_usuario"]){ ?>

                                            <img src="img/coracaoRosa.png" width="23px">

                                        <?php }else{

                                            $classeComentario2->idUsuario = $_COOKIE["id_usuario"];
                                            $classeComentario2->idComentario = $arrComentario2["id"]; ?>

                                            <script>

                                            function mudarCoracao<?php echo $arrComentario2['id']; ?>(){

                                                var conteudoSrc = document.getElementById("coracaoRosa<?php echo $arrComentario2['id']; ?>").src;

                                                if(conteudoSrc === "<?php include "php/configLink.php"; ?>/img/coracaoRosa.png"){

                                                    document.getElementById("coracaoRosa<?php echo $arrComentario2['id']; ?>").src="img/coracaoVerde.png";

                                                }else{

                                                    document.getElementById("coracaoRosa<?php echo $arrComentario2['id']; ?>").src="img/coracaoRosa.png";

                                                }

                                            }

                                            </script>

                                            <?php

                                            if($classeComentario2->verificaLikeJaComentado() == true){ ?>

                                                <img style="cursor:pointer" src="img/coracaoVerde.png" id="coracaoRosa<?php echo $arrComentario2['id']; ?>" onclick="mudarCoracao<?php echo $arrComentario2['id']; ?>()" width="23px">

                                            <?php }else{ ?>

                                                <img style="cursor:pointer" src="img/coracaoRosa.png" id="coracaoRosa<?php echo $arrComentario2['id']; ?>" onclick="mudarCoracao<?php echo $arrComentario2['id']; ?>()" width="23px">

                                            <?php }

                                        }

                                    }else{ ?>

                                        <img src="img/coracaoRosa.png" width="23px">

                                    <?php }

                                    ?> <label class="text-black-50" id="qtdLike<?php echo $arrComentario2['id']; ?>"><?php

                                    $classeComentario2->idComentario = $arrComentario2['id'];

                                    echo $classeComentario2->retornaQtdLike();

                                    ?></label></p>
                                    
                                    <div class="modal fade" id="modalDenunciarComentarioSeguidor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                              <input type="hidden" name="idComentario" value="<?php echo $arrComentario2["id"]; ?>">
                                              <input type="hidden" name="textoComentario" value="<?php echo $arrComentario2["texto"]; ?>">
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
                        
                                function insereLike<?php echo $arrComentario2['id']; ?> (usuario, id_usuario_anotacao, comentario) {

                                    $.ajax({

                                        type: "POST",
                                        dataType: "html",

                                        url: "php/enviarLike.php",

                                        beforeSend: function () {

                                            $("#loading").html("<img class='imgLoading' src='img/loading.gif'>");

                                        },

                                        data: {usuario: usuario, id_usuario_anotacao: id_usuario_anotacao, comentario: comentario},

                                        success: function (msg) {

                                            $("#qtdLike<?php echo $arrComentario2['id']; ?>").html(msg)

                                        }

                                    });

                                }

                                $("#coracaoRosa<?php echo $arrComentario2['id']; ?>").click(function(){

                                    insereLike<?php echo $arrComentario2['id']; ?>(<?php echo $_COOKIE["id_usuario"]; ?>, <?php echo $arrComentario2['id_usuario']; ?>, <?php echo $arrComentario2['id']; ?>)

                                });

                                </script>

                            </div>
                            
                        </div>

                    </div>

                    <?php
                    
                    $numeroVersao = $classeTexto->retornaNumeroVersao("acf");
                    $numeroLivro = $classeTexto->retornaNumeroLivro($arrComentario2["livro"]);

                    $classeTexto->versao = $numeroVersao;
                    $classeTexto->livro = $numeroLivro;
                    $classeTexto->capitulo = $arrComentario2["capitulo"];
                    $classeTexto->verso = $arrComentario2["numero_versiculo"];
                    
                    ?>

                    <div class="<?php echo "modal fade bd-modal-anotacaoSeguidor".$arrComentario2['livro'].$arrComentario2['capitulo'].$arrComentario2['numero_versiculo'].$classeUsuarios->retornaNomePeloComentario()."-lg"; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title text-left" id="exampleModalLabel"><?php

                              echo $arrComentario2["livro"]." ".$arrComentario2["capitulo"].":".$arrComentario2["numero_versiculo"]." - ".$classeTexto->retornaVerso();

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

                    <?php
                    
                    }
                    
                    ?>

                    <?php
                    
//                    Comentarios de outros usuários
                    
                    foreach ($classeComentario2->retornaComentario($livroTitulo, $capituloTitulo, $versiculoTitulo) as $arrComentario2NaoSeguidor){
                    
                    ?>

                    <div class="row mt-3 mb-4 <?php
                    
                    if(isset($_COOKIE["id_usuario"])){
                        
                        $classeComentario2->idUsuario = $_COOKIE["id_usuario"];
                        $classeComentario2->idComentario = $arrComentario2NaoSeguidor["id"];
                        
                        if($classeComentario2->verificaComentarioSeguidorOuNao() == false){
                            
                            
                            
                        }else{
                            
                            echo "d-none";
                            
                        }
                        
                    }else{
                        
                        
                        
                    }
                    
                    ?>">
                            
                        <div class="col-md-1 col-2">
                            
                            <?php
                            
                            $classeUsuarios->idUsuario = $arrComentario2NaoSeguidor["id_usuario"];
                            
                            if($classeUsuarios->retornaImagem() == FALSE){ ?>
                                
                                <img src="img/semImagem.jpg" class="float-left img-avatar mt-2 shadow-sm">
                                
                            <?php }else{ ?>
                                
                                <img src="img/<?php echo $arrComentario2NaoSeguidor["id_usuario"]; ?>avatar.jpg" class="float-left img-avatar mt-2 shadow-sm">
                                
                            <?php }
                            
                            ?>
                            
                        </div>

                        <div class="col-md-11 col-10">
                            
                            <div class="row">
                                
                                <div class="col">
                                    
                                    <p class="text-left text-secondary">
                                        
                                        <?php
                                        
                                        if(isset($_COOKIE["id_usuario"])){
                                            
                                            $classeUsuarios->idUsuario = $_COOKIE["id_usuario"];
                                            
                                            if($classeUsuarios->verificaSeguirJaSeguindo($arrComentario2NaoSeguidor["id_usuario"]) == true){ ?>
                                                
                                                <img src="img/iconeSeguindo.png" width="20px">
                                                
                                            <?php }
                                            
                                        }
                                        
                                        ?>
                                        
                                        <a class="text-primary font-weight-bold" href="perfil/<?php $classeUsuarios->idUsuario = $arrComentario2NaoSeguidor["id_usuario"]; echo $classeUsuarios->retornaNomePeloComentario() ?>"><?php $classeUsuarios->idUsuario = $arrComentario2NaoSeguidor["id_usuario"]; echo $classeUsuarios->retornaNomePeloComentario() ?>:</a> <?php
                                        
                                        $explodeAnotacao = explode(" ", $arrComentario2NaoSeguidor['texto']);
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
                            
                                            echo "... <a href='' data-toggle='modal' data-target='.bd-modal-anotacaoNaoSeguidor".$arrComentario2NaoSeguidor["livro"].$arrComentario2NaoSeguidor["capitulo"].$arrComentario2NaoSeguidor["numero_versiculo"].$classeUsuarios->retornaNomePeloComentario()."-lg'>Ver mais</a>";

                                        }
                                        
                                        ?> 
                                        
                                    </p>
                                    
                                </div>
                                
                            </div>
                            
                            <div class="row border-bottom">
                        
                                <div class="col">

                                    <p class="text-right"> <label style="cursor:pointer" class="text-warning" data-toggle="modal" data-target="#modalDenunciarComentario">Denunciar</label> <img style="cursor:pointer" data-toggle="modal" data-target="#modalDenunciarComentario" src="img/icone-atencao.png" width="21px"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php
                            
                                    if(isset($_COOKIE["id_usuario"])){

                                        if($_COOKIE["id_usuario"] == $arrComentario2NaoSeguidor["id_usuario"]){ ?>

                                            <img src="img/coracaoRosa.png" width="23px">

                                        <?php }else{

                                            $classeComentario2->idUsuario = $_COOKIE["id_usuario"];
                                            $classeComentario2->idComentario = $arrComentario2NaoSeguidor["id"]; ?>

                                            <script>

                                            function mudarCoracao<?php echo $arrComentario2NaoSeguidor['id']."naoSeguidor"; ?>(){

                                                var conteudoSrc = document.getElementById("coracaoRosa<?php echo $arrComentario2NaoSeguidor['id']."naoSeguidor"; ?>").src;

                                                if(conteudoSrc === "<?php include "php/configLink.php"; ?>/img/coracaoRosa.png"){

                                                    document.getElementById("coracaoRosa<?php echo $arrComentario2NaoSeguidor['id']."naoSeguidor"; ?>").src="img/coracaoVerde.png";

                                                }else{

                                                    document.getElementById("coracaoRosa<?php echo $arrComentario2NaoSeguidor['id']."naoSeguidor"; ?>").src="img/coracaoRosa.png";

                                                }

                                            }

                                            </script>

                                            <?php

                                            if($classeComentario2->verificaLikeJaComentado() == true){ ?>

                                                <img style="cursor:pointer" src="img/coracaoVerde.png" id="coracaoRosa<?php echo $arrComentario2NaoSeguidor['id']."naoSeguidor"; ?>" onclick="mudarCoracao<?php echo $arrComentario2NaoSeguidor['id']."naoSeguidor"; ?>()" width="23px">

                                            <?php }else{ ?>

                                                <img style="cursor:pointer" src="img/coracaoRosa.png" id="coracaoRosa<?php echo $arrComentario2NaoSeguidor['id']."naoSeguidor"; ?>" onclick="mudarCoracao<?php echo $arrComentario2NaoSeguidor['id']."naoSeguidor"; ?>()" width="23px">

                                            <?php }

                                        }

                                    }else{ ?>

                                        <img src="img/coracaoRosa.png" width="23px">

                                    <?php }

                                    ?> <label class="text-black-50" id="qtdLike<?php echo $arrComentario2NaoSeguidor['id']."naoSeguidor"; ?>"><?php

                                    $classeComentario2->idComentario = $arrComentario2NaoSeguidor['id'];

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
                                              <input type="hidden" name="idComentario" value="<?php echo $arrComentario2NaoSeguidor["id"]; ?>">
                                              <input type="hidden" name="textoComentario" value="<?php echo $arrComentario2NaoSeguidor["texto"]; ?>">
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
                        
                                function insereLike<?php echo $arrComentario2NaoSeguidor['id']."naoSeguidor"; ?> (usuario, id_usuario_anotacao, comentario) {

                                    $.ajax({

                                        type: "POST",
                                        dataType: "html",

                                        url: "php/enviarLike.php",

                                        beforeSend: function () {

                                            $("#loading").html("<img class='imgLoading' src='img/loading.gif'>");

                                        },

                                        data: {usuario: usuario, id_usuario_anotacao: id_usuario_anotacao, comentario: comentario},

                                        success: function (msg) {

                                            $("#qtdLike<?php echo $arrComentario2NaoSeguidor['id']."naoSeguidor"; ?>").html(msg)

                                        }

                                    });

                                }

                                $("#coracaoRosa<?php echo $arrComentario2NaoSeguidor['id']."naoSeguidor"; ?>").click(function(){

                                    insereLike<?php echo $arrComentario2NaoSeguidor['id']."naoSeguidor"; ?>(<?php echo $_COOKIE["id_usuario"]; ?>, <?php echo $arrComentario2NaoSeguidor['id_usuario']; ?>, <?php echo $arrComentario2NaoSeguidor['id']; ?>)

                                });

                                </script>

                            </div>
                            
                        </div>

                    </div>

                    <?php
                    
                    $numeroVersao = $classeTexto->retornaNumeroVersao("acf");
                    $numeroLivro = $classeTexto->retornaNumeroLivro($arrComentario2NaoSeguidor["livro"]);

                    $classeTexto->versao = $numeroVersao;
                    $classeTexto->livro = $numeroLivro;
                    $classeTexto->capitulo = $arrComentario2NaoSeguidor["capitulo"];
                    $classeTexto->verso = $arrComentario2NaoSeguidor["numero_versiculo"];
                    
                    ?>

                    <div class="<?php echo "modal fade bd-modal-anotacaoNaoSeguidor".$arrComentario2NaoSeguidor['livro'].$arrComentario2NaoSeguidor['capitulo'].$arrComentario2NaoSeguidor['numero_versiculo'].$classeUsuarios->retornaNomePeloComentario()."-lg"; ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title text-left" id="exampleModalLabel"><?php

                              echo $arrComentario2NaoSeguidor["livro"]." ".$arrComentario2NaoSeguidor["capitulo"].":".$arrComentario2NaoSeguidor["numero_versiculo"]." - ".$classeTexto->retornaVerso();

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
