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
        
        <title>Configurações - Anotações Bíblicas</title>
        <?php
        
            include_once './php/configBase.php';
        
        ?>
        
        <?php

        include "php/loginFalse.php";

        ?>
        
        <?php

        if(!isset($_COOKIE["nome_usuario"]) && !isset($_COOKIE["email_usuario"]) && !isset($_COOKIE["id_usuario"])) {

            echo "<script>window.location=''</script>";

        }

        ?>
        
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/icone.png" />
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/configuracoes.css" type="text/css" media="all and (min-width: 1050px)">
        <link rel="stylesheet" href="css/configuracoesCel.css" type="text/css" media="all and (min-width: 0px) and (max-width: 1049px)">
        
        <?php
        
//        Iniciando as classes
        
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
                    
                    <h1 class="tituloLivro">
                        
                        Configurações da conta
                        
                    </h1>
                    
                    <div id="cConteudoT">
                        
                        <label class="labData">Usúario cadastrado em: <?php
                        
                            $idUsuario = $_COOKIE["id_usuario"];

                            echo $classeUsuario->retornaDataCadastro($idUsuario);
                        
                        ?></label><br><br>
                        
                        <!-- Picture will stay here bellow -->
                        
                        <img src="img/<?php
                        
                        if($classeUsuario->retornaImagem() == NULL){
                            
                            echo"semImagem.jpg";
                            
                        }else{
                            
                            echo $classeUsuario->retornaImagem();
                            
                        }
                        
                        ?>" class="imgAvatar">
                        
                        <?php
                        
                        if($classeUsuario->retornaImagem() == NULL){}else{
                        
                        ?>
                        
                        <button onclick="window.location='php/girarImagem.php'" class="btnVirar"><img src="img/virar.png" class="btnImagemVirar"></button>
                        
                        <button onclick="if(window.confirm('Tem certeza que deseja apagar sua foto de perfil?')){window.location='php/apagarFoto.php'}else{}" class="btnApagar">X</button><br><br>
                        
                        <?php
                        
                        }
                        
                        ?>
                        
                        <form method="post" action="php/enviarImagem.php" enctype="multipart/form-data">
                            
                            <input type="file" class="selecaoImagem" name="imagem" required>
                            
                            <input type="submit" value="Alterar imagem" class="btnImagem" onclick="loading()">
                            
                        </form>
                        
                        <label class="labNome">Editar Nome:</label><br><br>
                        
                        <form method="post" action="php/editarNome.php">
                            
                            <input type="text" pattern="[A-Za-z0-9][\wÀ-ú]*" maxlength="20" name="nome" required class="inputNome" value="<?php
                            
                            echo $_COOKIE["nome_usuario"];
                            
                            ?>">
                            
                            <input type="submit" class="btnNome" value="Alterar">
                            
                        </form><br><br>
                        
                        <label class="labNome">Editar Senha:</label><br><br>
                        
                        <form method="post" action="php/editarSenha.php">
                            
                            <input type="password" class="inputNome" name="senhaAntiga" required placeholder="Digite sua senha atual"><br><br>
                            
                            <input type="password" class="inputNome" name="novaSenha1" required placeholder="Digite sua nova senha"><br><br>
                            
                            <input type="password" class="inputNome" name="novaSenha2" required placeholder="Digite sua nova senha novamente">
                            
                            <input type="submit" class="btnNome" value="Alterar">
                            
                        </form><br><br>
                        
                        <label class="tituloEnviar">Frase de perfil</label><br><br>
                        
                        <form method="POST" action="php/fraseDePerfil.php">
                            
                            <textarea maxlength="249" required name="texto" class="textoEnviar"><?php
                            
                            $classeUsuarios->nome = $_COOKIE["nome_usuario"];
                            
                            foreach ($classeUsuarios->retornaDadosUsuario() as $arrUsuario){
                                
                                echo $arrUsuario["sobre"];
                                
                            }
                            
                            ?></textarea><br><br>
                            
                            <input type="submit" value="Alterar" class="btnNome">
                            
                        </form><br>
                    
                        <label class="tituloEnviar">Informar erro no site</label><br><br>
                        
                        <p>
                            
                            Encontrou algum problema no site? Informe os administradores <a href="https://erickmota.com" target="_blank">clicando aqui</a>
                            
                        </p><br><br>
                        
                        <div id="parteApagar">
                        
                        <br><br><label class="avisoExcluir">*Ao apagar sua conta, será apagado juntamente toda a sua base de dados, incluindo
                        Comentários e marcações.</label><br><br>
                        
                        <button class="botaoApagar" onclick="if (window.confirm('Essa ação não terá volta. Tem certeza que deseja excluir sua conta ?')) {window.location='php/apagarConta.php'} else {}">Excluir conta</button>
                        
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
