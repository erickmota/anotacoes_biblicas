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
        
        <title>Minhas anotações - Anotações Bíblicas</title>
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
        <link rel="stylesheet" href="css/anotacoes.css" type="text/css" media="all and (min-width: 1050px)">
        <link rel="stylesheet" href="css/anotacoesCel.css" type="text/css" media="all and (min-width: 0px) and (max-width: 1049px)">
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
                
                <div id="cConteudo">
                    
                    <h1 class="tituloLivro">
                        
                        Minhas Anotações
                        
                    </h1>
                    
                    <?php
                    
                    $versao = $explode[2];
                    
                    ?>
                    
                    <font class="nomeSelect">Selecione o livro desejado</font>
                        
                    <select class="selectLivro" onchange="selecionarLivro(this.value)">
                            
                                <option <?php
                            
                            if($explode[1] == "todos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/todos/<?php
                            
                            echo $versao;
                            
                            ?>/1">Todos</option>
                            
                            <optgroup label="Velho Testamento">
                            
                                <option <?php
                            
                            if($explode[1] == "Genesis"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Genesis/<?php
                            
                            echo $versao;
                            
                            ?>/1">Gênesis</option>
                                <option <?php
                            
                            if($explode[1] == "Exodo"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Exodo/<?php
                            
                            echo $versao;
                            
                            ?>/1">Êxodo</option>
                                <option <?php
                            
                            if($explode[1] == "Levitico"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Levitico/<?php
                            
                            echo $versao;
                            
                            ?>/1">Levítico</option>
                                <option <?php
                            
                            if($explode[1] == "Numeros"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Numeros/<?php
                            
                            echo $versao;
                            
                            ?>/1">Números</option>
                                <option <?php
                            
                            if($explode[1] == "Deuteronomio"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Deuteronomio/<?php
                            
                            echo $versao;
                            
                            ?>/1">Deuteronômio</option>
                                <option <?php
                            
                            if($explode[1] == "Josue"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Josue/<?php
                            
                            echo $versao;
                            
                            ?>/1">Josué</option>
                                <option <?php
                            
                            if($explode[1] == "Juizes"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Juizes/<?php
                            
                            echo $versao;
                            
                            ?>/1">Juízes</option>
                                <option <?php
                            
                            if($explode[1] == "Rute"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Rute/<?php
                            
                            echo $versao;
                            
                            ?>/1">Rute</option>
                                <option <?php
                            
                            if($explode[1] == "1 Samuel"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/1+Samuel/<?php
                            
                            echo $versao;
                            
                            ?>/1">1 Samuel</option>
                                <option <?php
                            
                            if($explode[1] == "2 Samuel"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/2+Samuel/<?php
                            
                            echo $versao;
                            
                            ?>/1">2 Samuel</option>
                                <option <?php
                            
                            if($explode[1] == "1 Reis"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/1+Reis/<?php
                            
                            echo $versao;
                            
                            ?>/1">1 Reis</option>
                                <option <?php
                            
                            if($explode[1] == "2 Reis"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/2+Reis/<?php
                            
                            echo $versao;
                            
                            ?>/1">2 Reis</option>
                                <option <?php
                            
                            if($explode[1] == "1 Cronicas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/1+Cronicas/<?php
                            
                            echo $versao;
                            
                            ?>/1">1 Crônicas</option>
                                <option <?php
                            
                            if($explode[1] == "2 Cronicas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/2+Cronicas/<?php
                            
                            echo $versao;
                            
                            ?>/1">2 Crônicas</option>
                                <option <?php
                            
                            if($explode[1] == "Esdras"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Esdras/<?php
                            
                            echo $versao;
                            
                            ?>/1">Esdras</option>
                                <option <?php
                            
                            if($explode[1] == "Neemias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Neemias/<?php
                            
                            echo $versao;
                            
                            ?>/1">Neemias</option>
                                <option <?php
                            
                            if($explode[1] == "Ester"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Ester/<?php
                            
                            echo $versao;
                            
                            ?>/1">Ester</option>
                                <option <?php
                            
                            if($explode[1] == "Jo"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Jo/<?php
                            
                            echo $versao;
                            
                            ?>/1">Jó</option>
                                <option <?php
                            
                            if($explode[1] == "Salmos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Salmos/<?php
                            
                            echo $versao;
                            
                            ?>/1">Salmos</option>
                                <option <?php
                            
                            if($explode[1] == "Proverbios"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Proverbios/<?php
                            
                            echo $versao;
                            
                            ?>/1">Provérbios</option>

                                <option <?php
                            
                            if($explode[1] == "Eclesiastes"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Eclesiastes/<?php
                            
                            echo $versao;
                            
                            ?>/1">Eclesiastes</option>
                                <option <?php
                            
                            if($explode[1] == "Cânticos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Cânticos/<?php
                            
                            echo $versao;
                            
                            ?>/1">Cânticos</option>
                                <option <?php
                            
                            if($explode[1] == "Isaias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Isaias/<?php
                            
                            echo $versao;
                            
                            ?>/1">Isaías</option>
                                <option <?php
                            
                            if($explode[1] == "Jeremias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Jeremias/<?php
                            
                            echo $versao;
                            
                            ?>/1">Jeremias</option>
                                <option <?php
                            
                            if($explode[1] == "Lamentações"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Lamentações/<?php
                            
                            echo $versao;
                            
                            ?>/1">Lamentações</option>
                                <option <?php
                            
                            if($explode[1] == "Ezequiel"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Ezequiel/<?php
                            
                            echo $versao;
                            
                            ?>/1">Ezequiel</option>
                                <option <?php
                            
                            if($explode[1] == "Daniel"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Daniel/<?php
                            
                            echo $versao;
                            
                            ?>/1">Daniel</option>
                                <option <?php
                            
                            if($explode[1] == "Oseias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Oseias/<?php
                            
                            echo $versao;
                            
                            ?>/1">Oséias</option>
                                <option <?php
                            
                            if($explode[1] == "Joel"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Joel/<?php
                            
                            echo $versao;
                            
                            ?>/1">Joel</option>
                                <option <?php
                            
                            if($explode[1] == "Amos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Amos/<?php
                            
                            echo $versao;
                            
                            ?>/1">Amós</option>
                                <option <?php
                            
                            if($explode[1] == "Obadias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Obadias/<?php
                            
                            echo $versao;
                            
                            ?>/1">Obadias</option>
                                <option <?php
                            
                            if($explode[1] == "Jonas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Jonas/<?php
                            
                            echo $versao;
                            
                            ?>/1">Jonas</option>
                                <option <?php
                            
                            if($explode[1] == "Miqueias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Miqueias/<?php
                            
                            echo $versao;
                            
                            ?>/1">Miquéias</option>
                                <option <?php
                            
                            if($explode[1] == "Naum"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Naum/<?php
                            
                            echo $versao;
                            
                            ?>/1">Naum</option>
                                <option <?php
                            
                            if($explode[1] == "Habacuque"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Habacuque/<?php
                            
                            echo $versao;
                            
                            ?>/1">Habacuque</option>
                                <option <?php
                            
                            if($explode[1] == "Sofonias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Sofonias/<?php
                            
                            echo $versao;
                            
                            ?>/1">Sofonias</option>
                                <option <?php
                            
                            if($explode[1] == "Ageu"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Ageu/<?php
                            
                            echo $versao;
                            
                            ?>/1">Ageu</option>
                                <option <?php
                            
                            if($explode[1] == "Zacarias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Zacarias/<?php
                            
                            echo $versao;
                            
                            ?>/1">Zacarias</option>
                                <option <?php
                            
                            if($explode[1] == "Malaquias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Malaquias/<?php
                            
                            echo $versao;
                            
                            ?>/1">Malaquias</option>

                            </optgroup>

                            <optgroup label="Novo Testamento">

                                <option <?php
                            
                            if($explode[1] == "Mateus"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Mateus/<?php
                            
                            echo $versao;
                            
                            ?>/1">Mateus</option>
                                <option <?php
                            
                            if($explode[1] == "Marcos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Marcos/<?php
                            
                            echo $versao;
                            
                            ?>/1">Marcos</option>
                                <option <?php
                            
                            if($explode[1] == "Lucas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Lucas/<?php
                            
                            echo $versao;
                            
                            ?>/1">Lucas</option>
                                <option <?php
                            
                            if($explode[1] == "Joao"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Joao/<?php
                            
                            echo $versao;
                            
                            ?>/1">João</option>
                                <option <?php
                            
                            if($explode[1] == "Atos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Atos/<?php
                            
                            echo $versao;
                            
                            ?>/1">Atos</option>
                                <option <?php
                            
                            if($explode[1] == "Romanos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Romanos/<?php
                            
                            echo $versao;
                            
                            ?>/1">Romanos</option>
                                <option <?php
                            
                            if($explode[1] == "1 Corintios"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/1+Corintios/<?php
                            
                            echo $versao;
                            
                            ?>/1">1 Coríntios</option>
                                <option <?php
                            
                            if($explode[1] == "2 Corintios"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/2+Corintios/<?php
                            
                            echo $versao;
                            
                            ?>/1">2 Coríntios</option>
                                <option <?php
                            
                            if($explode[1] == "Galatas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Galatas/<?php
                            
                            echo $versao;
                            
                            ?>/1">Gálatas</option>
                                <option <?php
                            
                            if($explode[1] == "Efesios"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Efesios/<?php
                            
                            echo $versao;
                            
                            ?>/1">Efésios</option>
                                <option <?php
                            
                            if($explode[1] == "Filipenses"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Filipenses/<?php
                            
                            echo $versao;
                            
                            ?>/1">Filipenses</option>
                                <option <?php
                            
                            if($explode[1] == "Colossenses"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Colossenses/<?php
                            
                            echo $versao;
                            
                            ?>/1">Colossenses</option>
                                <option <?php
                            
                            if($explode[1] == "1 Tessalonicenses"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/1+Tessalonicenses/<?php
                            
                            echo $versao;
                            
                            ?>/1">1 Tessalonicenses</option>
                                <option <?php
                            
                            if($explode[1] == "2 Tessalonicenses"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/2+Tessalonicenses/<?php
                            
                            echo $versao;
                            
                            ?>/1">2 Tessalonicenses</option>

                                <option <?php
                            
                            if($explode[1] == "1 Timoteo"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/1+Timoteo/<?php
                            
                            echo $versao;
                            
                            ?>/1">1 Timóteo</option>
                                <option <?php
                            
                            if($explode[1] == "2 Timoteo"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/2+Timoteo/<?php
                            
                            echo $versao;
                            
                            ?>/1">2 Timóteo</option>
                                <option <?php
                            
                            if($explode[1] == "Tito"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Tito/<?php
                            
                            echo $versao;
                            
                            ?>/1">Tito</option>
                                <option <?php
                            
                            if($explode[1] == "Filemom"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Filemom/<?php
                            
                            echo $versao;
                            
                            ?>/1">Filemom</option>
                                <option <?php
                            
                            if($explode[1] == "Hebreus"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Hebreus/<?php
                            
                            echo $versao;
                            
                            ?>/1">Hebreus</option>
                                <option <?php
                            
                            if($explode[1] == "Tiago"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Tiago/<?php
                            
                            echo $versao;
                            
                            ?>/1">Tiago</option>
                                <option <?php
                            
                            if($explode[1] == "1 Pedro"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/1+Pedro/<?php
                            
                            echo $versao;
                            
                            ?>/1">1 Pedro</option>
                                <option <?php
                            
                            if($explode[1] == "2 Pedro"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/2+Pedro/<?php
                            
                            echo $versao;
                            
                            ?>/1">2 Pedro</option>
                                <option <?php
                            
                            if($explode[1] == "1 Joao"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/1+Joao/<?php
                            
                            echo $versao;
                            
                            ?>/1">1 João</option>
                                <option <?php
                            
                            if($explode[1] == "2 Joao"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/2+Joao/<?php
                            
                            echo $versao;
                            
                            ?>/1">2 João</option>
                                <option <?php
                            
                            if($explode[1] == "3 Joao"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/3+Joao/<?php
                            
                            echo $versao;
                            
                            ?>/1">3 João</option>
                                <option <?php
                            
                            if($explode[1] == "Judas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Judas/<?php
                            
                            echo $versao;
                            
                            ?>/1">Judas</option>
                                <option <?php
                            
                            if($explode[1] == "Apocalipse"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="anotacoes/Apocalipse/<?php
                            
                            echo $versao;
                            
                            ?>/1">Apocalipse</option>
                            
                            </optgroup>
                        
                        </select>
                    
                    <script>
        
        function selecionarVersao(livro){
            
            window.location=livro;
            
        }
        
        </script>
                    
                    <select class='versao' onchange="selecionarVersao(this.value)">
                        
                        <option value="anotacoes/todos/aa/1" <?php
                            
                            if($explode[2] == "aa"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?>>Almeida Atualizada - AA</option>
                        
                        <option value="anotacoes/todos/acf/1" <?php
                            
                            if($explode[2] == "acf"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?>>Almeida Corrigida e Fiel - ACF</option>
                        <option value="anotacoes/todos/nvi/1" <?php
                            
                            if($explode[2] == "nvi"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?>>Nova Versão Internacional - NVI</option>
                        
                    </select>
        
                    <?php
                    
                    include 'classes/anotacoes.class.php';
                    
                    $comentarioClass = new anotacoes();
                    
                    echo "<p class='topicos'>";
                    
                    if($comentarioClass->retornaTopicos() != NULL){
                    
                    foreach ($comentarioClass->retornaTopicos() as $arrTopicos){
                    
                    ?>
                    
                    <?php echo "<a class='linkTopicos' href='anotacoes/busca".substr($arrTopicos['topico'], 1)."/$versao/1'>".$arrTopicos['topico']."</a>"; ?> <img title="Apagar tópico" style="cursor: pointer;" onclick="if (window.confirm('Tem certeza que deseja desafixar <?php echo $arrTopicos['topico'] ?> dos tópicos? Ele ainda ficará ativo nos comentários.')) {window.location='php/apagarTopico.php?topico=<?php echo substr($arrTopicos['topico'], 1) ?>&versao=<?php echo $versao ?>'} else {}" width='12px' src='img/excluir.png'> &nbsp&nbsp&nbsp
                    
                    <?php
                    
                    }
                    }else{
                        
                        echo "<font class='linkTopicosSem'>*Crie um tópico usando # em seus comentários, para fixalos aqui. Exemplo: #Salvação</font>";
                        
                    }
                    
                    echo "</p>";
                    
                    ?>
                    
                    <div id="cConteudoT">
                    
                    <?php
                        
                        $pg = $explode[3];
                        
                        $comentarioClass->pg = $pg;
                        
                        $comentarioClass->verAnotacoes($versao);
                    
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
