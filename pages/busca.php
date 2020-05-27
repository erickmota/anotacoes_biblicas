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
        
        <title>
            
            <?php
            
            $buscaTitulo = $explode[1];
            $versaoGrande = $explode[3];
            
            echo "Busca - $buscaTitulo - $versaoGrande - Anotações Bíblicas";
            
            ?>
            
        </title>
        <?php
        
            include_once './php/configBase.php';
        
        ?>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/icone.png" />
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/busca.css" type="text/css" media="all and (min-width: 1050px)">
        <link rel="stylesheet" href="css/buscaCel.css" type="text/css" media="all and (min-width: 0px) and (max-width: 1049px)">
        <script>
        
        function selecionarLivro(livro){
            
            window.location=livro;
            
        }
        
        </script>
        
        <!--        Inserindo Bootstrap-->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        
        <meta name="description" content="Resultado para <?php echo "$buscaTitulo"; ?> - Bíblia online para realizar anotações e marcações. Anote marque e estude, em 3 versões diferentes.">
        <meta name="keywords" content="Bíblia online, Anotações bíblicas, Marcações bíblicas, Estudo, Marcação, Anotação, versículos, capítulos, bíblia de estudo, bíblia para estudo, <?php echo "$buscaTitulo"; ?>">
        
        <?php
        
//        Iniciar classes
        
        include "classes/usuarios.class.php";
        $classeUsuarios = new usuarios();
        
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
                    
                    <h2 class="text-left mt-4 mb-4 tituloLivro">
                        
                        Resultado de busca para: " <?php
                        
                        echo $explode[1];
                        
                        $busca = $explode[1];
                        $versao = $explode[3];
                        
                        ?> "
                        
                    </h2>
                    
                    <div class="row">
                        
                        <div class="col">
                            
                            <h3 class="text-left">Usuários</h3>
                            
                        </div>
                        
                    </div>
                    
                    <?php
                    
                    if($classeUsuarios->buscarUsuarioPorNome($explode[1]) == FALSE){ ?>
                        
                    <div class="row text-center">
                        
                        <div class="col">
                            
                            <p class="text-info">
                                
                                Nenhum usuário encontrado!
                                
                            </p>
                            
                        </div>
                        
                    </div>
                        
                    <?php }else{
                    
                    ?>
                    
                    <div class="row text-left">
                        
                        <div class="col">
                            
                            <?php
                            
                            foreach ($classeUsuarios->buscarUsuarioPorNome($explode[1]) as $arrUsuarios){
                            
                            ?>
                            
                            <a href="perfil/<?php echo $arrUsuarios["nome"]; ?>"><div class="balaoUsuario d-inline-block p-2 mr-1 mt-2">
                            
                                <img style="cursor: pointer" class="shadow-sm imgUsuario2" src="img/<?php
                                
                                $classeUsuarios->idUsuario = $arrUsuarios["id"];
                                
                                if($classeUsuarios->retornaImagem() == FALSE){
                                    
                                    echo 'semImagem.jpg';
                                    
                                }else{
                                    
                                    echo $arrUsuarios["img"];
                                    
                                }
                                
                                ?>">&nbsp;

                                <font class="text-white"><?php echo $arrUsuarios["nome"] ?></font>
                            
                            </div></a>
                            
                            <?php
                            
                            }
                            
                            ?>
                            
                        </div>
                        
                    </div>
                    
                    <?php
                    
                    }
                    
                    ?>
                    
                    <hr>
                    
                    <font class="nomeSelect">Selecione o livro desejado</font>
                        
                    <select class="selectLivro" onchange="selecionarLivro(this.value)">
                            
                            <option <?php
                            
                            if($explode[2] == "todos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                            
                                $buscaUrl = urlencode($busca);
                                
                                echo "$buscaUrl/todos/$versao/1";
                                
                                ?>">Todos</option>
                            
                            <optgroup label="Velho Testamento">
                            
                                <option <?php
                            
                            if($explode[2] == "Genesis"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Genesis/$versao/1";
                                
                                ?>">Gênesis</option>
                                <option <?php
                            
                            if($explode[2] == "Exodo"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Exodo/$versao/1";
                                
                                ?>">Êxodo</option>
                                <option <?php
                            
                            if($explode[2] == "Levitico"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Levitico/$versao/1";
                                
                                ?>">Levítico</option>
                                <option <?php
                            
                            if($explode[2] == "Numeros"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Numeros/$versao/1";
                                
                                ?>">Números</option>
                                <option <?php
                            
                            if($explode[2] == "Deuteronomio"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Deuteronomio/$versao/1";
                                
                                ?>">Deuteronômio</option>
                                <option <?php
                            
                            if($explode[2] == "Josue"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Josue/$versao/1";
                                
                                ?>">Josué</option>
                                <option <?php
                            
                            if($explode[2] == "Juizes"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Juizes/$versao/1";
                                
                                ?>">Juízes</option>
                                <option <?php
                            
                            if($explode[2] == "Rute"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Rute/$versao/1";
                                
                                ?>">Rute</option>
                                <option <?php
                            
                            if($explode[2] == "1 Samuel"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/1+Samuel/$versao/1";
                                
                                ?>">1 Samuel</option>
                                <option <?php
                            
                            if($explode[2] == "2 Samuel"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/2+Samuel/$versao/1";
                                
                                ?>">2 Samuel</option>
                                <option <?php
                            
                            if($explode[2] == "1 Reis"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/1+Reis/$versao/1";
                                
                                ?>">1 Reis</option>
                                <option <?php
                            
                            if($explode[2] == "2 Reis"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/2+Reis/$versao/1";
                                
                                ?>">2 Reis</option>
                                <option <?php
                            
                            if($explode[2] == "1 Cronicas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/1+Cronicas/$versao/1";
                                
                                ?>">1 Crônicas</option>
                                <option <?php
                            
                            if($explode[2] == "2 Cronicas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/2+Cronicas/$versao/1";
                                
                                ?>">2 Crônicas</option>
                                <option <?php
                            
                            if($explode[2] == "Esdras"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Esdras/$versao/1";
                                
                                ?>">Esdras</option>
                                <option <?php
                            
                            if($explode[2] == "Neemias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Neemias/$versao/1";
                                
                                ?>">Neemias</option>
                                <option <?php
                            
                            if($explode[2] == "Ester"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Ester/$versao/1";
                                
                                ?>">Ester</option>
                                <option <?php
                            
                            if($explode[2] == "Jo"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Jo/$versao/1";
                                
                                ?>">Jó</option>
                                <option <?php
                            
                            if($explode[2] == "Salmos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Salmos/$versao/1";
                                
                                ?>">Salmos</option>
                                <option <?php
                            
                            if($explode[2] == "Proverbios"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Proverbios/$versao/1";
                                
                                ?>">Provérbios</option>

                                <option <?php
                            
                            if($explode[2] == "Eclesiastes"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Eclesiastes/$versao/1";
                                
                                ?>">Eclesiastes</option>
                                <option <?php
                            
                            if($explode[2] == "Cânticos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Cânticos/$versao/1";
                                
                                ?>">Cânticos</option>
                                <option <?php
                            
                            if($explode[2] == "Isaias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Isaias/$versao/1";
                                
                                ?>">Isaías</option>
                                <option <?php
                            
                            if($explode[2] == "Jeremias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Jeremias/$versao/1";
                                
                                ?>">Jeremias</option>
                                <option <?php
                            
                            if($explode[2] == "Lamentações"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Lamentações/$versao/1";
                                
                                ?>">Lamentações</option>
                                <option <?php
                            
                            if($explode[2] == "Ezequiel"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Ezequiel/$versao/1";
                                
                                ?>">Ezequiel</option>
                                <option <?php
                            
                            if($explode[2] == "Daniel"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Daniel/$versao/1";
                                
                                ?>">Daniel</option>
                                <option <?php
                            
                            if($explode[2] == "Oseias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Oseias/$versao/1";
                                
                                ?>">Oséias</option>
                                <option <?php
                            
                            if($explode[2] == "Joel"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Joel/$versao/1";
                                
                                ?>">Joel</option>
                                <option <?php
                            
                            if($explode[2] == "Amos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Amos/$versao/1";
                                
                                ?>">Amós</option>
                                <option <?php
                            
                            if($explode[2] == "Obadias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Obadias/$versao/1";
                                
                                ?>">Obadias</option>
                                <option <?php
                            
                            if($explode[2] == "Jonas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Jonas/$versao/1";
                                
                                ?>">Jonas</option>
                                <option <?php
                            
                            if($explode[2] == "Miqueias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Miqueias/$versao/1";
                                
                                ?>">Miquéias</option>
                                <option <?php
                            
                            if($explode[2] == "Naum"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Naum/$versao/1";
                                
                                ?>">Naum</option>
                                <option <?php
                            
                            if($explode[2] == "Habacuque"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Habacuque/$versao/1";
                                
                                ?>">Habacuque</option>
                                <option <?php
                            
                            if($explode[2] == "Sofonias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Sofonias/$versao/1";
                                
                                ?>">Sofonias</option>
                                <option <?php
                            
                            if($explode[2] == "Ageu"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Ageu/$versao/1";
                                
                                ?>">Ageu</option>
                                <option <?php
                            
                            if($explode[2] == "Zacarias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Zacarias/$versao/1";
                                
                                ?>">Zacarias</option>
                                <option <?php
                            
                            if($explode[2] == "Malaquias"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Malaquias/$versao/1";
                                
                                ?>">Malaquias</option>

                            </optgroup>

                            <optgroup label="Novo Testamento">

                                <option <?php
                            
                            if($explode[2] == "Mateus"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Mateus/$versao/1";
                                
                                ?>">Mateus</option>
                                <option <?php
                            
                            if($explode[2] == "Marcos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Marcos/$versao/1";
                                
                                ?>">Marcos</option>
                                <option <?php
                            
                            if($explode[2] == "Lucas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Lucas/$versao/1";
                                
                                ?>">Lucas</option>
                                <option <?php
                            
                            if($explode[2] == "Joao"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Joao/$versao/1";
                                
                                ?>">João</option>
                                <option <?php
                            
                            if($explode[2] == "Atos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Atos/$versao/1";
                                
                                ?>">Atos</option>
                                <option <?php
                            
                            if($explode[2] == "Romanos"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Romanos/$versao/1";
                                
                                ?>">Romanos</option>
                                <option <?php
                            
                            if($explode[2] == "1 Corintios"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/1+Corintios/$versao/1";
                                
                                ?>">1 Coríntios</option>
                                <option <?php
                            
                            if($explode[2] == "2 Corintios"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/2+Corintios/$versao/1";
                                
                                ?>">2 Coríntios</option>
                                <option <?php
                            
                            if($explode[2] == "Galatas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Galatas/$versao/1";
                                
                                ?>">Gálatas</option>
                                <option <?php
                            
                            if($explode[2] == "Efesios"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Efesios/$versao/1";
                                
                                ?>">Efésios</option>
                                <option <?php
                            
                            if($explode[2] == "Filipenses"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Filipenses/$versao/1";
                                
                                ?>">Filipenses</option>
                                <option <?php
                            
                            if($explode[2] == "Colossenses"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Colossenses/$versao/1";
                                
                                ?>">Colossenses</option>
                                <option <?php
                            
                            if($explode[2] == "1 Tessalonicenses"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/1+Tessalonicenses/$versao/1";
                                
                                ?>">1 Tessalonicenses</option>
                                <option <?php
                            
                            if($explode[2] == "2 Tessalonicenses"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/2+Tessalonicenses/$versao/1";
                                
                                ?>">2 Tessalonicenses</option>

                                <option <?php
                            
                            if($explode[2] == "1 Timoteo"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/1+Timoteo/$versao/1";
                                
                                ?>">1 Timóteo</option>
                                <option <?php
                            
                            if($explode[2] == "2 Timoteo"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/2+Timoteo/$versao/1";
                                
                                ?>">2 Timóteo</option>
                                <option <?php
                            
                            if($explode[2] == "Tito"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Tito/$versao/1";
                                
                                ?>">Tito</option>
                                <option <?php
                            
                            if($explode[2] == "Filemom"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Filemom/$versao/1";
                                
                                ?>">Filemom</option>
                                <option <?php
                            
                            if($explode[2] == "Hebreus"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Hebreus/$versao/1";
                                
                                ?>">Hebreus</option>
                                <option <?php
                            
                            if($explode[2] == "Tiago"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Tiago/$versao/1";
                                
                                ?>">Tiago</option>
                                <option <?php
                            
                            if($explode[2] == "1 Pedro"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/1+Pedro/$versao/1";
                                
                                ?>">1 Pedro</option>
                                <option <?php
                            
                            if($explode[2] == "2 Pedro"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/2+Pedro/$versao/1";
                                
                                ?>">2 Pedro</option>
                                <option <?php
                            
                            if($explode[2] == "1 Joao"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/1+Joao/$versao/1";
                                
                                ?>">1 João</option>
                                <option <?php
                            
                            if($explode[2] == "2 Joao"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/2+Joao/$versao/1";
                                
                                ?>">2 João</option>
                                <option <?php
                            
                            if($explode[2] == "3 Joao"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/3+Joao/$versao/1";
                                
                                ?>">3 João</option>
                                <option <?php
                            
                            if($explode[2] == "Judas"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Judas/$versao/1";
                                
                                ?>">Judas</option>
                                <option <?php
                            
                            if($explode[2] == "Apocalipse"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?> value="busca/<?php
                                
                                echo "$buscaUrl/Apocalipse/$versao/1";
                                
                                ?>">Apocalipse</option>
                            
                            </optgroup>
                        
                        </select>
                    
                    <script>
        
        function selecionarVersao(livro){
            
            window.location=livro;
            
        }
        
        </script>
                    
                    <select class='versao' onchange="selecionarVersao(this.value)">
                        
                        <option value="busca/<?php echo urlencode($busca) ?>/todos/aa/1" <?php
                            
                            if($explode[3] == "aa"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?>>Almeida Atualizada - AA</option>
                        
                        <option value="busca/<?php echo urlencode($busca) ?>/todos/acf/1" <?php
                            
                            if($explode[3] == "acf"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?>>Almeida Corrigida e Fiel - ACF</option>
                        <option value="busca/<?php echo urlencode($busca) ?>/todos/nvi/1" <?php
                            
                            if($explode[3] == "nvi"){
                                
                                echo "Selected";
                                
                            }
                            
                            ?>>Nova Versão Internacional - NVI</option>
                        
                    </select>
                    
                <div class="mt-4" id="cConteudoT">
                    
                    <?php
                    
                    include 'classes/busca.class.php';
                    
                    $pg = $explode[4];
                    
                    $buscaClass = new busca();
                    
                    $buscaClass->busca = $busca;
                    
                    $buscaClass->pg = $pg;
                    
                    echo $buscaClass->buscaTexto($explode[3]);
                    
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
