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
        
        <title>Meu histórico - Anotações Bíblicas</title>
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
        <link rel="stylesheet" href="css/historico.css" type="text/css" media="all and (min-width: 1050px)">
        <link rel="stylesheet" href="css/historicoCel.css" type="text/css" media="all and (min-width: 0px) and (max-width: 1049px)">
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
                        
                        <?php
                        
                        include 'classes/historico.class.php';
                               
                        $classeHistorico = new historico();
                        
                        $classeHistorico->idUsuario = $_COOKIE["id_usuario"];
                        
                        $dataAtual = date("Y-m-d H:i:s");
                        
                        $diaAtual = substr($dataAtual, 8, 2);
                        $mesAtual = substr($dataAtual, 5, 2);
                        $anoAtual = substr($dataAtual, 0, 4);
                        $horaAtual = substr($dataAtual, 11, 2);
                        $minutoAtual = substr($dataAtual, 14, 2);
                        
                        if(isset($explode[1]) && $explode[1] != ""){
                            
                            $classeHistorico->data = $explode[1];
                            
                            $dataUrl = $explode[1];
                            
                            $diaUrl = substr($dataUrl, 8, 2);
                            $mesUrl = substr($dataUrl, 5, 2);
                            $anoUrl = substr($dataUrl, 0, 4);
                            
                            echo "Histórico $diaUrl/$mesUrl/$anoUrl";
                            
                            if($classeHistorico->verificaDataNome() == TRUE){
                                
                                echo " - ".$classeHistorico->retornaNomeDataHistorico();
                                
                            }
                            
                        }else{
                            
                            $classeHistorico->data = date("Y-m-d");
                            
                            echo "Histórico $diaAtual/$mesAtual/$anoAtual";
                            
                            if($classeHistorico->verificaDataNome() == TRUE){
                                
                                echo " - ".$classeHistorico->retornaNomeDataHistorico();
                                
                            }
                            
                        }
                        
                        ?>
                        
                    </h1>
                    
                    <div id="corpoDataMarcada">
                        
                        <?php
                        
                        $classeHistorico->idUsuario = $_COOKIE["id_usuario"];
                        
                        if($classeHistorico->retornarDataHistorico() == NULL){
                            
                            echo "Você ainda não tem datas marcadas";
                            
                        }else{
                            
                            foreach ($classeHistorico->retornarDataHistorico() as $arrData){
                                
                                $dataNome = $arrData["data"];
                                
                                $diaNome = substr($dataNome, 8, 2);
                                $mesNome = substr($dataNome, 5, 2);
                                $anoNome = substr($dataNome, 0, 4);
                                
                                echo "<a href='historico/$dataNome'>$diaNome/$mesNome/$anoNome - ".$arrData["nome"]."</a><br>";
                                
                            }
                            
                        }
                        
                        ?>
                        
                    </div>
                    
                    <form class="formData" method="post" action="php/selecionarDataHistorico.php">
                        
                        <label class="labelData">Selecione a data desejada</label>
                    
                        <input type="date" value="<?php
                        
                        if(isset($explode[1]) && $explode[1] != ""){
                            
                            echo $explode[1];
                            
                        }else{
                            
                            echo date("Y-m-d");
                            
                        }
                        
                        ?>" class="selectData" name="data">
                        
                        <input type="submit" value="Buscar data" class="botaoData">
                    
                    </form>
                    
                    <div id="corpoTabela">
                        
                        <?php
                        
                        include 'classes/exibirCapitulo.class.php';

                        $capitulos = new exibirCapitulo();

                        $classeHistorico->idUsuario = $_COOKIE["id_usuario"];
                        
                        if(isset($explode[1]) && $explode[1] != ""){
                            
                            $classeHistorico->data = $explode[1];
                            
                        }else{
                            
                            $classeHistorico->data = date("Y-m-d");
                            
                        }
                        
                        $arrayHistorico = $classeHistorico->retornaHistorico();
                        
                        if($arrayHistorico == NULL){
                            
                        ?>
                            
                        <table border="0px" cellspacing="0px" cellpadding="20px" class="tableConteudo">
                            
                            <tr>
                                
                                <td class="tdCentro">
                                    
                                    Não achamos histórico nessa data
                                    
                                </td>
                                
                            </tr>
                            
                        </table>
                            
                        <?php
                            
                        }else{
                        
                        foreach ($arrayHistorico as $arrHistorico){
                        
                        ?>
                        
                        <table border="0px" cellspacing="0px" cellpadding="20px" class="tableConteudo">

                            <tr class="trLinha">

                                <td class="tdData">
                                    
                                    <?php
                                    
                                    $dataBanco = $arrHistorico["data"];
                                    
                                    $diaBanco = substr($dataBanco, 8, 2);
                                    $mesBanco = substr($dataBanco, 5, 2);
                                    $anoBanco = substr($dataBanco, 0, 4);
                                    $horaBanco = substr($dataBanco, 11, 2);
                                    $minutoBanco = substr($dataBanco, 14, 2);
                                    
                                    echo "$diaBanco/$mesBanco/$anoBanco - $horaBanco:$minutoBanco";
                                    
                                    ?>
                                    
                                </td>
                                <td class="tdDireita">
                                    
                                    <a href="<?php
                                    
                                    $urlAtual = $_SERVER["REQUEST_URI"];
                                    
                                    if($arrHistorico["livro"] == NULL && $arrHistorico["capitulo"] == 0 && $arrHistorico["versiculo"] == 0){
                                        
                                        echo $urlAtual;
                                        
                                    }elseif($arrHistorico["livro"] != NULL && $arrHistorico["capitulo"] != 0 && $arrHistorico["versiculo"] == 0){
                                        
                                        echo $arrHistorico["livro"]."/".$arrHistorico["capitulo"]."/".$capitulos->retornaVersao();
                                        
                                    }else{
                                        
                                        echo $arrHistorico["livro"]."/".$arrHistorico["capitulo"]."/".$arrHistorico["versiculo"]."/".$capitulos->retornaVersao();
                                        
                                    }
                                    
                                    ?>"><?php
                                    
                                    echo $arrHistorico["texto"];
                                    
                                    ?></a>
                                    
                                </td>
                                <td class="tdDireitaX">
                                    
                                    <a href="php/apagarHistorico.php?idHistorico=<?php
                                    
                                    echo $arrHistorico["id"];
                                    
                                    ?>&data=<?php
                                    
                                    if(isset($explode[1]) && $explode[1] != ""){
                            
                                        echo $explode[1];

                                    }else{

                                        echo date("Y-m-d");

                                    }
                                    
                                    ?>"><img width="15px" title="Apagar histórico" src="img/excluir.png"></a>
                                    
                                </td>

                            </tr>

                        </table>
                        
                        <?php
                        
                        }}
                        
                        if($arrayHistorico == NULL && $classeHistorico->verificaDataNome() == FALSE){
                            
                            
                            
                        }else{
                            
                        if($classeHistorico->verificaDataNome() == FALSE){
                        
                        ?>
                        
                        <form class="formDestaque" method="post" action="php/salvarDataHistorico.php">
                            
                            <input type="hidden" name="data" value="<?php
                            
                            if(isset($explode[1]) && $explode[1] != ""){
                            
                            echo $explode[1];
                            
                            }else{

                                echo date("Y-m-d");

                            }
                            
                            ?>">
                            
                            <input type="text" name="nome_data" maxlength="50" required class="inputNomeDestaque" placeholder="Digite um nome para a data">
                            
                            <input type="submit" value="Destacar data" class="botaoDestaque">
                            
                        </form>
                        
                        <?php
                        
                        }else{
                            
                        ?>
                        
                        <a href="php/apagarDataHistorico.php?data=<?php
                        
                        if(isset($explode[1]) && $explode[1] != ""){
                            
                            echo $explode[1];

                        }else{

                            echo date("Y-m-d");

                        }
                        
                        ?>"><button class="botaoApagarData">Tirar data dos destaques</button></a>
                        
                        <?php
                            
                        }
                        
                        }
                        
                        ?>
                        
                        <div id="voltarData">
                            
                            <?php
                            
                            if(isset($explode[1])){
                            
                                $diaRetorno = substr($classeHistorico->retornaUltimaDataHistorico($explode[1]), 8, 2);
                                $mesRetorno = substr($classeHistorico->retornaUltimaDataHistorico($explode[1]), 5, 2);
                                $anoRetorno = substr($classeHistorico->retornaUltimaDataHistorico($explode[1]), 0, 4);
                            
                            }else{
                                
                                $dataAtualSomente = date("Y-m-d");
                                
                                $diaRetorno = substr($classeHistorico->retornaUltimaDataHistorico($dataAtualSomente), 8, 2);
                                $mesRetorno = substr($classeHistorico->retornaUltimaDataHistorico($dataAtualSomente), 5, 2);
                                $anoRetorno = substr($classeHistorico->retornaUltimaDataHistorico($dataAtualSomente), 0, 4);
                                
                            }
                            
                            if($diaRetorno != NULL){
                            
                            ?>
                            
                            <a class="linkVoltar" href="historico/<?php echo "$anoRetorno-$mesRetorno-$diaRetorno"; ?>"><< <?php echo "$diaRetorno/$mesRetorno/$anoRetorno"; ?></a>
                            
                            <?php
                            
                            }
                            
                            ?>
                            
                        </div>
                    
                    </div>
                
            </div>
            
            <!-- Início do rodapé e livros ******************************* -->
            
            <?php
            
            include 'phpPartes/rodape.php';
            
            ?>
        
        </div>
            
        </div>
        
    </body>
</html>
