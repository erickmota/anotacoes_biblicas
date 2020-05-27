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
        
        <title>Minhas marcações - Anotações Bíblicas</title>
        <?php
        
            include_once './php/configBase.php';
        
        ?>
        
        <?php

        include "php/loginFalse.php";
        @$explode = explode("/", $_GET["url"]);

        ?>
        
        <?php

        if(!isset($_COOKIE["nome_usuario"]) && !isset($_COOKIE["email_usuario"]) && !isset($_COOKIE["id_usuario"])) {

            echo "<script>window.location=''</script>";

        }

        ?>
        
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/icone.png" />
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/marcacoes.css" type="text/css" media="all and (min-width: 1050px)">
        <link rel="stylesheet" href="css/marcacoesCel.css" type="text/css" media="all and (min-width: 0px) and (max-width: 1049px)">
        <script>
        
        function selecionarLivro(livro){
            
            window.location=livro;
            
        }
        
        </script>
    </head>
    
    <body>
        <div id="corpo" align="center">
            
            <!-- Início da barra inicial ********************************** -->
        
            <?php
            
            include 'phpPartes/cabecalho.php';
            
            ?>
            
            <!-- Início do conteúdo da página (passagens bíblicas) ******* -->
            
            <div id="conteudo">
                
                <?php
                
                $versao = $explode[2];
                
                ?>
                
                <div id="cConteudo">
                    
                    <h1 class="tituloLivro">
                        
                        Minhas Marcações
                        
                    </h1>
                    
                    <p>
                        
                    <font class="nomeSelect">Selecione o livro desejado</font>
                        
                    <select class="selectLivro" onchange="selecionarLivro(this.value)">
                            
                                <option <?php
                            
                            if($explode[1] == "todos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/todos/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Todos</option>
                            
                            <optgroup label="Velho Testamento">
                            
                                <option <?php
                            
                            if($explode[1] == "Genesis"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Genesis/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Gênesis</option>
                                <option <?php
                            
                            if($explode[1] == "Exodo"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Exodo/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Êxodo</option>
                                <option <?php
                            
                            if($explode[1] == "Levitico"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Levitico/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Levítico</option>
                                <option <?php
                            
                            if($explode[1] == "Numeros"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Numeros/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Números</option>
                                <option <?php
                            
                            if($explode[1] == "Deuteronomio"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Deuteronomio/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Deuteronômio</option>
                                <option <?php
                            
                            if($explode[1] == "Josue"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Josue/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Josué</option>
                                <option <?php
                            
                            if($explode[1] == "Juizes"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Juizes/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Juízes</option>
                                <option <?php
                            
                            if($explode[1] == "Rute"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Rute/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Rute</option>
                                <option <?php
                            
                            if($explode[1] == "1 Samuel"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/1+Samuel/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">1 Samuel</option>
                                <option <?php
                            
                            if($explode[1] == "2 Samuel"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/2+Samuel/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">2 Samuel</option>
                                <option <?php
                            
                            if($explode[1] == "1 Reis"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/1+Reis/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">1 Reis</option>
                                <option <?php
                            
                            if($explode[1] == "2 Reis"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/2+Reis/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">2 Reis</option>
                                <option <?php
                            
                            if($explode[1] == "1 Cronicas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/1+Cronicas/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">1 Crônicas</option>
                                <option <?php
                            
                            if($explode[1] == "2 Cronicas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/2+Cronicas">2 Crônicas</option>
                                <option <?php
                            
                            if($explode[1] == "Esdras"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Esdras/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Esdras</option>
                                <option <?php
                            
                            if($explode[1] == "Neemias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Neemias/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Neemias</option>
                                <option <?php
                            
                            if($explode[1] == "Ester"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Ester/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Ester</option>
                                <option <?php
                            
                            if($explode[1] == "Jo"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Jo/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Jó</option>
                                <option <?php
                            
                            if($explode[1] == "Salmos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Salmos/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Salmos</option>
                                <option <?php
                            
                            if($explode[1] == "Proverbios"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Proverbios/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Provérbios</option>

                                <option <?php
                            
                            if($explode[1] == "Eclesiastes"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Eclesiastes/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Eclesiastes</option>
                                <option <?php
                            
                            if($explode[1] == "Cânticos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Cânticos/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Cânticos</option>
                                <option <?php
                            
                            if($explode[1] == "Isaias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Isaias/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Isaías</option>
                                <option <?php
                            
                            if($explode[1] == "Jeremias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Jeremias/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Jeremias</option>
                                <option <?php
                            
                            if($explode[1] == "Lamentações"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Lamentações/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Lamentações</option>
                                <option <?php
                            
                            if($explode[1] == "Ezequiel"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Ezequiel/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Ezequiel</option>
                                <option <?php
                            
                            if($explode[1] == "Daniel"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Daniel/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Daniel</option>
                                <option <?php
                            
                            if($explode[1] == "Oseias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Oseias/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Oséias</option>
                                <option <?php
                            
                            if($explode[1] == "Joel"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Joel/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Joel</option>
                                <option <?php
                            
                            if($explode[1] == "Amos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Amos/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Amós</option>
                                <option <?php
                            
                            if($explode[1] == "Obadias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Obadias/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Obadias</option>
                                <option <?php
                            
                            if($explode[1] == "Jonas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Jonas/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Jonas</option>
                                <option <?php
                            
                            if($explode[1] == "Miqueias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Miqueias/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Miquéias</option>
                                <option <?php
                            
                            if($explode[1] == "Naum"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Naum/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Naum</option>
                                <option <?php
                            
                            if($explode[1] == "Habacuque"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Habacuque/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Habacuque</option>
                                <option <?php
                            
                            if($explode[1] == "Sofonias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Sofonias/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Sofonias</option>
                                <option <?php
                            
                            if($explode[1] == "Ageu"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Ageu/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Ageu</option>
                                <option <?php
                            
                            if($explode[1] == "Zacarias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Zacarias/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Zacarias</option>
                                <option <?php
                            
                            if($explode[1] == "Malaquias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Malaquias/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Malaquias</option>

                            </optgroup>

                            <optgroup label="Novo Testamento">

                                <option <?php
                            
                            if($explode[1] == "Mateus"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Mateus/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Mateus</option>
                                <option <?php
                            
                            if($explode[1] == "Marcos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Marcos/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Marcos</option>
                                <option <?php
                            
                            if($explode[1] == "Lucas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Lucas/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Lucas</option>
                                <option <?php
                            
                            if($explode[1] == "Joao"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Joao/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">João</option>
                                <option <?php
                            
                            if($explode[1] == "Atos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Atos/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Atos</option>
                                <option <?php
                            
                            if($explode[1] == "Romanos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Romanos/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Romanos</option>
                                <option <?php
                            
                            if($explode[1] == "1 Corintios"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/1+Corintios/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">1 Coríntios</option>
                                <option <?php
                            
                            if($explode[1] == "2 Corintios"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/2+Corintios/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">2 Coríntios</option>
                                <option <?php
                            
                            if($explode[1] == "Galatas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Galatas/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Gálatas</option>
                                <option <?php
                            
                            if($explode[1] == "Efesios"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Efesios/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Efésios</option>
                                <option <?php
                            
                            if($explode[1] == "Filipenses"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Filipenses/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Filipenses</option>
                                <option <?php
                            
                            if($explode[1] == "Colossenses"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Colossenses/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Colossenses</option>
                                <option <?php
                            
                            if($explode[1] == "1 Tessalonicenses"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/1+Tessalonicenses/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">1 Tessalonicenses</option>
                                <option <?php
                            
                            if($explode[1] == "2 Tessalonicenses"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/2+Tessalonicenses/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">2 Tessalonicenses</option>

                                <option <?php
                            
                            if($explode[1] == "1 Timoteo"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/1+Timoteo/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">1 Timóteo</option>
                                <option <?php
                            
                            if($explode[1] == "2 Timoteo"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/2+Timoteo/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">2 Timóteo</option>
                                <option <?php
                            
                            if($explode[1] == "Tito"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Tito/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Tito</option>
                                <option <?php
                            
                            if($explode[1] == "Filemom"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Filemom">Filemom</option>
                                <option <?php
                            
                            if($explode[1] == "Hebreus"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Hebreus/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Hebreus</option>
                                <option <?php
                            
                            if($explode[1] == "Tiago"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Tiago/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Tiago</option>
                                <option <?php
                            
                            if($explode[1] == "1 Pedro"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/1+Pedro/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">1 Pedro</option>
                                <option <?php
                            
                            if($explode[1] == "2 Pedro"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/2+Pedro/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">2 Pedro</option>
                                <option <?php
                            
                            if($explode[1] == "1 Joao"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/1+Joao/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">1 João</option>
                                <option <?php
                            
                            if($explode[1] == "2 Joao"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/2+Joao/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">2 João</option>
                                <option <?php
                            
                            if($explode[1] == "3 Joao"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/3+Joao/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">3 João</option>
                                <option <?php
                            
                            if($explode[1] == "Judas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Judas/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Judas</option>
                                <option <?php
                            
                            if($explode[1] == "Apocalipse"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="marcacoes/Apocalipse/<?php
                            
                            echo $versao;
                            
                            ?>/cores/1">Apocalipse</option>
                            
                            </optgroup>
                        
                        </select>
                    
                    <script>
        
        function selecionarVersao(livro){
            
            window.location=livro;
            
        }
        
        </script>
                    
                    <select class='versao' onchange="selecionarVersao(this.value)">
                        
                        <option value="marcacoes/todos/aa/cores/1" <?php
                            
                            if($explode[2] == "aa"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?>>Almeida Atualizada - AA</option>
                        
                        <option value="marcacoes/todos/acf/cores/1" <?php
                            
                            if($explode[2] == "acf"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?>>Almeida Corrigida e Fiel - ACF</option>
                        <option value="marcacoes/todos/nvi/cores/1" <?php
                            
                            if($explode[2] == "nvi"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?>>Nova Versão Internacional - NVI</option>
                        
                    </select>
        
                    </p>
                        
                    <img class="img1" src="img/marcadorAmarelo.png" width="20px" onclick="document.location='<?php
                        
                        if($explode[1] != "todos"){
                            
                           $livro = $explode[1];
                           $livroUrl = urlencode($livro);
                           
                           echo "marcacoes/$livroUrl/$versao/amarelo/1";
                            
                        }else{
                            
                            echo "marcacoes/todos/$versao/amarelo/1";
                            
                        }
                        
                        ?>'">
                        
                    <img class="img2" src="img/marcadorVerde.png" width="20px" onclick="document.location='<?php
                        
                        if($explode[1] != "todos"){
                            
                           $livro = $explode[1];
                           $livroUrl = urlencode($livro);
                           
                           echo "marcacoes/$livroUrl/$versao/verde/1";
                            
                        }else{
                            
                            echo "marcacoes/todos/$versao/verde/1";
                            
                        }
                        
                        ?>'">
                    
                    <img class="img2" src="img/marcadorLaranja.png" width="20px" onclick="document.location='<?php
                        
                        if($explode[1] != "todos"){
                            
                           $livro = $explode[1];
                           $livroUrl = urlencode($livro);
                           
                           echo "marcacoes/$livroUrl/$versao/laranja/1";
                            
                        }else{
                            
                            echo "marcacoes/todos/$versao/laranja/1";
                            
                        }
                        
                        ?>'">
                    
                    <img class="img2" src="img/marcadorAzul.png" width="20px" onclick="document.location='<?php
                        
                        if($explode[1] != "todos"){
                            
                           $livro = $explode[1];
                           $livroUrl = urlencode($livro);
                           
                           echo "marcacoes/$livroUrl/$versao/azul/1";
                            
                        }else{
                            
                            echo "marcacoes/todos/$versao/azul/1";
                            
                        }
                        
                        ?>'">
                    
                    <img class="img2" src="img/marcadorRoxo.png" width="20px" onclick="document.location='<?php
                        
                        if($explode[1] != "todos"){
                            
                           $livro = $explode[1];
                           $livroUrl = urlencode($livro);
                           
                           echo "marcacoes/$livroUrl/$versao/roxo/1";
                            
                        }else{
                            
                            echo "marcacoes/todos/$versao/roxo/1";
                            
                        }
                        
                        ?>'">
                    
                    <div id="cConteudoT">
                    
                    <?php
                    
                        include 'classes/verMarcacoes.class.php';
                        
                        $pg = $explode[4];
                        
                        $marcacoesClass = new verMarcacoesClass();
                        
                        $marcacoesClass->pg = $pg;
                        
                        $marcacoesClass->verMarcacoes($versao);
                    
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
