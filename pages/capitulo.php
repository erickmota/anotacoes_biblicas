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
            $versaoTitulo = $explode[1];
            
            echo "$livroTitulo - $versaoTitulo - Anotações Bíblicas";
            
            ?>
            
        </title>
        <?php
        
            include_once './php/configBase.php';
        
        ?>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/icone.png" />
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/capitulo.css" type="text/css" media="all and (min-width: 1050px)">
        <link rel="stylesheet" href="css/capituloCel.css" type="text/css" media="all and (min-width: 0px) and (max-width: 1049px)">
    </head>
    
    <body>
        <div id="corpo" align="center">
            
            <!-- Início da barra inicial ********************************** -->
        
            <?php
            
            include 'phpPartes/cabecalho.php';
            
            ?>
            
            <!-- Início do conteúdo da página (passagens bíblicas) ******* -->
            
            <div id="conteudo">
                
                <div id="margin"></div>
                
                <div id="cConteudo">
                    
                    <h1 class="tituloLivro">
                        
                        <?php
                        
                        $livro = $explode[0];
                        
                        echo $livro;
                        
                        ?>
                        
                    </h1>
                    
                    <?php
                    
                    $capitulo = $explode[0];
                    
                    include 'classes/numeroCapitulo.class.php';
                    
                    $numeroCapitulo = new numeroCapitulo();
                    
                    $numeroCapitulo->livro = $capitulo;
                    
                    $numeroCapitulo->mostrarVersiculo($explode[1]);
                    
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
