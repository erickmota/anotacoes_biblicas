<?php

date_default_timezone_set('America/Sao_Paulo');

include 'classes/exibirCapitulo.class.php';

$capitulos = new exibirCapitulo();

include "php/loginFalse.php";

@$explode = explode("/", $_GET["url"]);

if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
    
    include 'classes/historico.class.php';
            
    $classeHistorico = new historico();

    if(isset($_GET["url"])){

        $livro = $explode[0];
        $capitulo = $explode[1];

        $classeHistorico->sessaoCapitulo($livro, $capitulo);

    }else{

        $classeHistorico->sessaoCapitulo($capitulos->retornaLivro(), $capitulos->retornaCapitulo());

    }    
    
}

$livroUrl = urlencode($explode[0]);

?>

<!-- Título: Anotações bíblicas
Desenvolvido por: Erick Mota
Versão: 1.4.2
Última atualização do projeto 23/06/2019 - 02:18 -->

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
        
        <title><?php
            
            if(isset($_GET["url"])){
                
                $livroTitulo = $explode[0];
                $capituloTitulo = $explode[1];
                $versaoTitulo = $explode[2];
                
                echo "$livroTitulo $capituloTitulo - $versaoTitulo - Anotações Bíblicas";
                
            }else{
                
                echo "Anotações Bíblicas";
                
            }
            
            ?></title>
        
        <?php
        
            include_once './php/configBase.php';
        
        ?>
        
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/icone.png" />
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/texto.css" type="text/css" media="all and (min-width: 1050px)">
        <link rel="stylesheet" href="css/textoCel.css" type="text/css" media="all and (min-width: 0px) and (max-width: 1049px)">
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/rolagem-pagina.js"></script>
        <script type="text/javascript" src="js/menuRolagem.js"></script>
        <script type="text/javascript" src="js/menuRolagem2.js"></script>
        <script type="text/javascript" src="js/menuMarcacao.js"></script>
        <script type="text/javascript" src="js/menuLeitura.js"></script>
        
        <!--        Inserindo Bootstrap-->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        
        <!-- Verificação de tag Google -->
        
        <meta name="google-site-verification" content="kXohZKf9vZvgOOrFTl4d6ij_HSR4dvkQF6x4b0OYUhE" />
        
        <?php
        
        if(isset($_GET["livro"]) && isset($_GET["capitulo"])){
        
        ?>
        
        <meta name="description" content="Leia <?php echo "$livroTitulo $capituloTitulo - $versaoTitulo"; ?> - Bíblia online para realizar anotações e marcações. Anote marque e estude, em 3 versões diferentes.">
        <meta name="keywords" content="Bíblia online, Anotações bíblicas, Marcações bíblicas, Estudo, Marcação, Anotação, versículos, capítulos, bíblia de estudo, <?php echo "$livroTitulo $capituloTitulo - $versaoTitulo"; ?>, <?php echo "$livroTitulo $capituloTitulo"; ?>">
        <meta name="language" content="Pt-Br">
        <meta name="author" content="Erick Mota">
        
        <?php
        
        }else{
        
        ?>
        
        <meta name="description" content="Bíblia online para realizar anotações e marcações. Anote marque e estude, em 3 versões diferentes.">
        <meta name="keywords" content="Bíblia online, Anotações bíblicas, Marcações bíblicas, Estudo, Marcação, Anotação, versículos, capítulos, bíblia de estudo, bíblia para estudo">
        <meta name="language" content="Pt-Br">
        <meta name="author" content="Erick Mota">
        
        <?php
        
        }
        
        ?>
        
        <?php
        
//        Iniciando classes
        
        include "classes/usuarios.class.php";
        $classeUsuarios = new usuarios();
        
        ?>
        
    </head>
    
    <body>
        
        <div id="corpo" align="center">
            
            <!-- Início da barra inicial ********************************** -->
        
            <?php
            
            if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                
                if(isset($_GET["url"])){
                    
                    $livro = $explode[0];
                    $capitulo = $explode[1];
                    $versao = $explode[2];
                    
                    $capitulos->nome = $livro;
                    $capitulos->capitulo = $capitulo;
                    $capitulos->versao = $versao;
                    
                    $capitulos->salvarPassagem();
                    $capitulos->atualizarVersao($versao);
                    
                }else{
                    
                }
                
            }
            
            include 'phpPartes/cabecalho.php';
            
            ?>
            
            <div id="barraEscura">
    
    <div id="corpoBarraEscura">
        
        <div id="tituloBarraEscura">
            
            <?php
                        
                        if(isset($_GET["url"])){
                            
                            if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                
                                $livro = $explode[0];
                                $capitulo = $explode[1];
                                $versao = $explode[2];

                                $capitulos->nome = $livro;
                                $capitulos->capitulo = $capitulo;
                                $capitulos->versao = $versao;
                                
                                $versaoMaiuscula = strtoupper($capitulos->versao);

                                echo "$capitulos->nome $capitulos->capitulo - $versaoMaiuscula";
                                
                            }else{
                                
                                $livro = $explode[0];
                                $capitulo = $explode[1];
                                $versao = $explode[2];

                                $capitulos->nome = $livro;
                                $capitulos->capitulo = $capitulo;
                                $capitulos->versao = $versao;
                                
                                $versaoMaiuscula = strtoupper($capitulos->versao);

                                echo "$capitulos->nome $capitulos->capitulo - $versaoMaiuscula";
                                
                            }
                        
                        }else{
                            
                            if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                
                                $capitulos->nome = $capitulos->retornaLivro();
                                $capitulos->capitulo = $capitulos->retornaCapitulo();
                                $capitulos->versao = $capitulos->retornaVersao();
                                
                                $versaoMaiuscula = strtoupper($capitulos->versao);
                                
                                echo "$capitulos->nome $capitulos->capitulo - $versaoMaiuscula";
                                
                            }else{
                                
                                $capitulos->nome = "Mateus";
                                $capitulos->capitulo = 1;
                                $capitulos->versao = "acf";
                                
                                $versaoMaiuscula = strtoupper($capitulos->versao);
                                
                                echo "$capitulos->nome $capitulos->capitulo - $versaoMaiuscula";
                                
                            }
                            
                        }
                        
                        ?>
            
        </div>
        
<!--        <div id="conteudoBarraEscura">-->
            
            <?php
            
            if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
            
            ?>

            <div id="conteudoBarraEscura">
            
            <img src="img/marcador.png" class="marcador">&nbsp;&nbsp;
            
            <?php
            
            }else{
            
            ?>
            
            <div id="conteudoBarraEscura2">
                
            <?php
            
            }
            
            ?>
            
            <?php
            
            if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
            
            if(isset($_GET["ml"]) || isset($explode[3])){
            
            ?>
            
<!--                <a href="index.php?ml"><img src="img/modoLeitura.png" class="modoLeitura" title="Ativar modo de leitura"></a>&nbsp;&nbsp;-->
                <img style="cursor: pointer" src="img/modoLeituraAtivado.png" class="modoLeitura" data-toggle="modal" data-target="#modalExemplo">&nbsp;&nbsp;
            
            <?php
            
            }else{
            
            ?>
            
            <img style="cursor: pointer" src="img/modoLeitura.png" class="modoLeitura"  data-toggle="modal" data-target="#modalExemplo">&nbsp;&nbsp;
            
            <?php
            
            }
            
            }
            
            ?>
            
            <a style="text-decoration: none;" href="<?php
            
            if(isset($_GET["url"])){
                
                $livro = urlencode($explode[0]);
                
                echo "$livro/$versao";
                
            }else{
                
                if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                    
                    $livroRetorno = urlencode($capitulos->retornaLivro());
                    
                    echo "$livroRetorno/$capitulos->versao";
                    
                }else{
                    
                    echo "Mateus/acf";
                    
                }
                
            }
            
            ?>">
                
                <?php
                
                if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                
                ?>
                
                <font class="textoBarraEscura">Selecionar Capítulo</font> <img src="img/setaEsquerda.png" class="seta"></a>&nbsp;&nbsp;
                <a href="#cVelhoTestamento" class="scroll"><font class="textoBarraEscura">Selecionar Livro</font> <img src="img/setaBaixo.png" class="seta"></a>
            
                <?php
                
                }else{
                
                ?>
                
                <font class="textoBarraEscura2">Cap</font> <font class="textoBarraEscura3">Selecionar Capítulo</font> <img src="img/setaEsquerda.png" class="seta2"></a>&nbsp;&nbsp;
                <a href="#cVelhoTestamento" class="scroll" style="text-decoration: none;"><font class="textoBarraEscura2">Liv</font> <font class="textoBarraEscura3">Selecionar Livro</font> <img src="img/setaBaixo.png" class="seta2"></a>
                
                <?php
                
                }
                
                ?>
            
            <div id="camadaMenuMarcacao"></div>
            
            <div id="menuMarcacao">
                
                <table cellpadding="5px">
                    
                    <tr>
                        
                        <td>
                            
                            <a href="php/marcacao.php?posicao=1&livro=<?php
                            
                            echo $capitulos->nome = $capitulos->retornaLivro();
                            
                            ?>&capitulo=<?php
                            
                            echo $capitulos->nome = $capitulos->retornaCapitulo();
                            
                            ?>"><?php
                
                            $classeMarcacao = new marcacao();

                            $verMarcacaoLivro1 = $classeMarcacao->verMarcacaoLivro1();

                            $verMarcacaoCapitulo1 = $classeMarcacao->verMarcacaoCapitulo1();

                            echo "Marcar na posição 1<br><font style='font-size:12px; color:chartreuse'>($verMarcacaoLivro1 $verMarcacaoCapitulo1)</font>";
                            
                            ?></a>
                            
                        </td>
                        
                    </tr>
                    
                    <tr>
                        
                        <td>
                            
                            <a href="php/marcacao.php?posicao=2&livro=<?php
                            
                            echo $capitulos->nome = $capitulos->retornaLivro();
                            
                            ?>&capitulo=<?php
                            
                            echo $capitulos->nome = $capitulos->retornaCapitulo();
                            
                            ?>"><?php
                
                            $classeMarcacao = new marcacao();

                            $verMarcacaoLivro2 = $classeMarcacao->verMarcacaoLivro2();

                            $verMarcacaoCapitulo2 = $classeMarcacao->verMarcacaoCapitulo2();

                            echo "Marcar na posição 2<br><font style='font-size:12px; color:chartreuse'>($verMarcacaoLivro2 $verMarcacaoCapitulo2)</font>";
                            
                            ?></a>
                            
                        </td>
                        
                    </tr>
                    
                    <tr>
                        
                        <td>
                            
                            <a href="php/marcacao.php?posicao=3&livro=<?php
                            
                            echo $capitulos->nome = $capitulos->retornaLivro();
                            
                            ?>&capitulo=<?php
                            
                            echo $capitulos->nome = $capitulos->retornaCapitulo();
                            
                            ?>"><?php
                
                            $classeMarcacao = new marcacao();

                            $verMarcacaoLivro3 = $classeMarcacao->verMarcacaoLivro3();

                            $verMarcacaoCapitulo3 = $classeMarcacao->verMarcacaoCapitulo3();

                            echo "Marcar na posição 3<br><font style='font-size:12px; color:chartreuse'>($verMarcacaoLivro3 $verMarcacaoCapitulo3)</font>";
                            
                            ?></a>
                            
                        </td>
                        
                    </tr>
                    
                </table>
                
            </div>
        
        </div>
        
    </div>
    
</div>
            
            <?php
            
            if(!isset($_COOKIE["nome_usuario"]) && !isset($_COOKIE["email_usuario"]) && !isset($_COOKIE["id_usuario"])){
            
            ?>
            
            <script language="javascript">
                
            var larguraTela = window.innerWidth;
            
            if(larguraTela < 500){
                
                document.write("<a href='cadastro'><img src='img/bannerABCelular.jpg' class='imgBanner'></a>");
                
            }else if(larguraTela < 800){
                
                document.write("<a href='cadastro'><img src='img/bannerABTablet.jpg' class='imgBanner'></a>");
                
            }else{
                
                document.write("<a href='cadastro'><img src='img/bannerAB.jpg' class='imgBanner'></a>");
                
            }
            
            </script>
            
            <?php
            
            }
            
            ?>
            
            <?php
            
            if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
            
            ?>
            
            <div id="corpoAnotacoesRapidas">
                
                <form method="POST" action="php/anotacoesRapidas.php">
                    
                    <textarea class="form-control" rows="2" placeholder="Crie lembretes e metas (Ex: lembrar de marcar Romanos 2:3)" name="texto"><?php
                        
                                    include 'classes/comentarios.class.php';
                                    
                                    $classeComentarios = new comentarios();
                                    
                                    $classeComentarios->verAnotacoesRapidas();
                        
                        ?></textarea>
                    
                    <input type="submit" value="Salvar" class="btn btn-primary btn-sm botaoAnotacoes">
                    
                </form>
                
            </div>
            
<!--            Modal menu leitura-->
            
            <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
<!--                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>-->
                    <div class="modal-body">
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      
                        <h5>Ativar modo leitura</h5>
                        <label class="text-muted font-weight-light">Ative o modo leitura para esconder todos os comentários e marcações.</label>
                        <p>
                            
                            <a href="<?php
                            
                            if(isset($_GET["ml"])){
                                
                                echo "";
                                
                            }else{
                                
                                echo "index.php?ml";
                                
                            }
                            
                            ?>"><img src="img/<?php
                            
                            if(isset($_GET["ml"])){
                                
                                echo "iconeOlhoVermelho";
                                
                            }else{
                                
                                echo "iconeOlho";
                                
                            }
                            
                            ?>.png"></a>
                            
                        </p>
                        <hr>
                        <h5>Bíblia amiga</h5>
                        <label class="text-muted font-weight-light">Selecione alguém que você segue para para ler o capítulo com suas marcações e anotações públicas.</label>
                        
                        <?php
                        
                        if($classeUsuarios->retornaSeguindoPorUsuario($_COOKIE["id_usuario"]) == FALSE){ ?>
                            
                            <p class="text-info">Você ainda não segue niguém!</p>
                            
                        <?php }else{
                            
                            if(isset($explode[3])){ ?>
                            
                            <?php
                            
                            $classeUsuarios->idUsuario = $_COOKIE["id_usuario"];
                            
                            if($classeUsuarios->retornaImagem() == FALSE){ ?>
                                
                                <a href=""><img style="cursor: pointer" class="shadow-sm mt-2 imgUsuario2" src="img/semImagem.jpg" title="Voltar a ler meus comentários"></a> <hr>
                                
                            <?php }else{ ?>
                                
                                <a href=""><img style="cursor: pointer" class="shadow-sm mt-2 imgUsuario2" src="img/<?php echo $classeUsuarios->retornaImagem() ?>" title="Voltar a ler meus comentários"></a> <hr>
                                
                            <?php }
                            
                            ?>
                                
<!--                                <img style="cursor: pointer" class="shadow-sm mt-2 imgUsuario2" src="img/semImagem.jpg" title="Voltar a ler meus comentários"> <hr>-->
                                
                            <?php }
                        
                            foreach ($classeUsuarios->retornaSeguindoPorUsuario($_COOKIE["id_usuario"]) as $arrUsuariosSeguir){

                                $classeUsuarios->idUsuario = $arrUsuariosSeguir["id_seguindo"];

                                if($classeUsuarios->retornaImagem() == FALSE){ ?>

                                &nbsp;<a class="espacoSeguindo" href="<?php

                                    if(isset($_GET["url"])){

                                        echo "$explode[0]/$explode[1]/$explode[2]/".$classeUsuarios->retornaNomePeloComentario();

                                    }else{

                                        echo $capitulos->retornaLivro()."/".$capitulos->retornaCapitulo()."/".$capitulos->retornaVersao()."/".$classeUsuarios->retornaNomePeloComentario();

                                    }

                                    ?>"><img style="cursor: pointer" class="shadow-sm mt-2 imgUsuario2" src="img/semImagem.jpg" title="<?php echo $classeUsuarios->retornaNomePeloComentario() ?>"><div class="numeroComentariosPorUsuario"><?php
                                    
                                    $nomeUsuarioSeguir = $classeUsuarios->retornaNomePeloComentario();
                                    
                                    $idUsuarioSeguir = $classeUsuarios->retornaIdPorNome($nomeUsuarioSeguir);
                                    
                                    if(isset($_GET["url"])){
                                        
                                        $livroSeguir = $explode[0];
                                        $capituloSeguir = $explode[1];
                                        
                                    }else{
                                        
                                        $livroSeguir = $capitulos->retornaLivro();;
                                        $capituloSeguir = $capitulos->retornaCapitulo();
                                        
                                    }
                                    
                                    echo $classeUsuarios->retornaAnotacaoPublicaPorCapitulo($idUsuarioSeguir, $livroSeguir, $capituloSeguir);
                                    
                                    ?></div></a>&nbsp;

                                <?php }else{ ?>

                                    &nbsp;<a class="espacoSeguindo" href="<?php
                            
                                    if(isset($_GET["url"])){

                                        echo "$explode[0]/$explode[1]/$explode[2]/".$classeUsuarios->retornaNomePeloComentario();

                                    }else{

                                        echo $capitulos->retornaLivro()."/".$capitulos->retornaCapitulo()."/".$capitulos->retornaVersao()."/".$classeUsuarios->retornaNomePeloComentario();

                                    }

                                    ?>"><img style="cursor: pointer" class="shadow-sm mt-2 imgUsuario2" src="img/<?php echo $classeUsuarios->retornaImagem() ?>" title="<?php echo $classeUsuarios->retornaNomePeloComentario() ?>"><div class="numeroComentariosPorUsuario"><?php
                                    
                                    $nomeUsuarioSeguir = $classeUsuarios->retornaNomePeloComentario();
                                    
                                    $idUsuarioSeguir = $classeUsuarios->retornaIdPorNome($nomeUsuarioSeguir);
                                    
                                    if(isset($_GET["url"])){
                                        
                                        $livroSeguir = $explode[0];
                                        $capituloSeguir = $explode[1];
                                        
                                    }else{
                                        
                                        $livroSeguir = $capitulos->retornaLivro();;
                                        $capituloSeguir = $capitulos->retornaCapitulo();
                                        
                                    }
                                    
                                    echo $classeUsuarios->retornaAnotacaoPublicaPorCapitulo($idUsuarioSeguir, $livroSeguir, $capituloSeguir);
                                    
                                    ?></div></a>&nbsp;

                                <?php }

    //<!--                        <img class="shadow-sm mt-2 imgUsuario2" src="img/semImagem.jpg">&nbsp;&nbsp;-->

                            }
                        
                        }
                        
                        ?>
                        
                    </div>
<!--                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      <button type="button" class="btn btn-primary">Salvar mudanças</button>
                    </div>-->
                  </div>
                </div>
            </div>
            
            <?php
            
            }
            
            ?>
            
            <!-- Início do conteúdo da página (passagens bíblicas) ******* -->
            
            <div id="conteudo">
                
                <div id="cConteudo">
                    
                    <h1 class="text-left mt-5">
                        
                        <?php
                        
                        if(isset($_GET["url"])){
                        
                        $livro = $explode[0];
                        $capitulo = $explode[1];
                        
                        $capitulos->nome = $livro;
                        $capitulos->capitulo = $capitulo;
                        
                        echo "$capitulos->nome $capitulos->capitulo";
                        
                        }else{
                            
                            if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                
                                $capitulos->nome = $capitulos->retornaLivro();
                                $capitulos->capitulo = $capitulos->retornaCapitulo();
                                
                                echo "$capitulos->nome $capitulos->capitulo";
                                
                            }else{
                                
                                $capitulos->nome = "Mateus";
                                $capitulos->capitulo = 1;
                                
                                echo "$capitulos->nome $capitulos->capitulo";
                                
                            }
                            
                        }
                        
                        ?>
                        
                    </h1>
                    
                    <p>
                        
                        <script>
        
                        function selecionarVersao(livro){

                            window.location=livro;

                        }

                        </script>
                    
                    <select class='versao' onchange="selecionarVersao(this.value)">
                        
                        <?php
                        
                        $livroUrl2 = urlencode($capitulos->nome);
                        
                        ?>
                        
                        <option value="<?php echo "$livroUrl2/$capitulos->capitulo/aa"; ?>" <?php
                            
                            if(isset($_GET["url"]) && $explode[2] == "aa" || !isset($_GET["url"]) && $capitulos->versao == "aa"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?>>Almeida Atualizada - AA</option>
                        
                        <option value="<?php echo "$livroUrl2/$capitulos->capitulo/acf"; ?>" <?php
                            
                            if(isset($_GET["url"]) && $explode[2] == "acf" || !isset($_GET["url"]) && $capitulos->versao == "acf"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?>>Almeida Corrigida e Fiel - ACF</option>
                        <option value="<?php echo "$livroUrl2/$capitulos->capitulo/nvi"; ?>" <?php
                            
                            if(isset($_GET["url"]) && $explode[2] == "nvi" || !isset($_GET["url"]) && $capitulos->versao == "nvi"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?>>Nova Versão Internacional - NVI</option>
                        
                    </select>
        
                    <?php
                    
                    if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                        
                        if(isset($_GET["ml"])){ ?>
                            
                            <p class='text-secondary text-left font-weight-light'>

                                <img class="shadow-sm imgUsuario2" src="img/iconeOlho.png"> &nbsp;&nbsp; Modo leitura ativado

                            </p>
                            
                        <?php }else if(isset($explode[3])){
                            
                            if($classeUsuarios->retornaImagemPeloNome($explode[3]) != FALSE){ ?>
                                
                                <p class='text-secondary text-left font-weight-light'>

                                    <img class="shadow-sm imgUsuario2" src="img/<?php echo $classeUsuarios->retornaImagemPeloNome($explode[3]) ?>"> &nbsp;&nbsp; Lendo capítulo como: <a href="perfil/<?php echo $explode[3] ?>"><?php echo $explode[3] ?></a>

                                </p>
                                
                            <?php }else{ ?>
                                
                                <p class='text-secondary text-left font-weight-light'>

                                    <img class="shadow-sm imgUsuario2" src="img/semImagem.jpg"> &nbsp;&nbsp; Lendo capítulo como: <a href="perfil/<?php echo $explode[3] ?>"><?php echo $explode[3] ?></a>

                                </p>
                                
                            <?php }
                            
                        }else{
                            
                            echo "<p class='text-secondary text-left font-weight-light'>* Clique sobre o versículo, para realizar marcações e anotações</p>";
                            
                        }
                        
                    }
                    
                    ?>
                    
                    </p>
                    
                    <?php
                    
                    $capitulos->exibirTexto();
                            
                    ?>
                    
                    <div id="voltarAvancar">
                        
                        <font class="linkVoltar">
                            
                            <?php
                            
                            if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                
                                $capitulos->voltarCapitulo($capitulos->retornaLivro(), $capitulos->retornaCapitulo(), $capitulos->retornaVersao());
                                
                            }else{
                                
                                if(isset($_GET["url"])){
                                    
                                    $capitulos->voltarCapitulo($livro, $capitulo, $versao);
                                    
                                }else{
                                    
                                    $capitulos->voltarCapitulo("Mateus", 1, "acf");
                                    
                                }
                                
                            }
                            
                            ?>
                        
                        </font>
                        
                        <font class="linkSeguir">
                            
                            <?php
                            
                            if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                
                                $capitulos->avancarCapitulo($capitulos->retornaLivro(), $capitulos->retornaCapitulo(), $capitulos->retornaVersao());
                                
                            }else{
                                
                                if(isset($_GET["url"])){
                                    
                                    $capitulos->avancarCapitulo($livro, $capitulo, $versao);
                                    
                                }else{
                                    
                                    $capitulos->avancarCapitulo("Mateus", 1, "acf");
                                    
                                }
                                
                            }
                            
                            ?>
                            
                        </font>
                        
                    </div>
                    
                </div>
                
            </div>
            
                <div id="espacoPC">
                    
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- AB pc -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:1024px;height:96px"
                         data-ad-client="ca-pub-4017917532228962"
                         data-ad-slot="7350231979"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    
                </div>
                
                <div id="espacoCelular">
                    
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- AB Celular -->
                    <ins class="adsbygoogle"
                         style="display:inline-block;width:320px;height:90px"
                         data-ad-client="ca-pub-4017917532228962"
                         data-ad-slot="7151276646"></ins>
                    <script>
                         (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    
                </div>
            
            <!-- Início do rodapé e livros ******************************* -->
            
            <?php
            
            include 'phpPartes/rodape.php';
            
            ?>
        
        </div>
        
    </body>
</html>
