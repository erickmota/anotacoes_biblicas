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
        
        <title>Política de uso - Anotações Bíblicas</title>
        <?php
        
            include_once './php/configBase.php';
        
        ?>
        
        <?php

        include "php/loginFalse.php";

        ?>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/icone.png" />
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/politica.css" type="text/css" media="all and (min-width: 1050px)">
        <link rel="stylesheet" href="css/politicaCel.css" type="text/css" media="all and (min-width: 0px) and (max-width: 1049px)">
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
                        
                        Política de uso
                        
                    </h1>
                    
                    <p>
                        
                        O Anotações Bíblicas, é um site sem fins lucrativos, tendo como objetivo exaltar ao Senhor Jesus Cristo, e espalhar a palavra de Deus. O site foi desenvolvido com a proposta de facilitar a criação de comentários bíblicos. Bastando ter apenas uma conexão com a internet, o site possibilita levar os comentários criados, para todos os lugares, seja pelo desktop, notebook, tablet ou celular. Aprenda a usar o Anotações Bíblicas <a href="tutorial">clicando aqui</a>.
                        
                    </p>
                    
                    <h3>
                        
                        Contas e senhas
                        
                    </h3>
                    
                    <p>
                        
                        Ao completar seu cadastro no Anotações bíblicas, sua senha ficará protegida e criptografada em nossa base de dados, nome e e-mail, poderão ser usados para questões de contato ou informações, por parte dos administradores do site, mas em nenhuma circunstância serão usados ou liberados ao público sem a devida permissão.
                        
                    </p>
                    
                    <h3>
                        
                        Conduta de usuário
                        
                    </h3>
                    
                    <p>
                        
                        Os administradores, não tolerarão condutas inapropriadas no site, seja por qualquer meio, como comentários inapropriados, e palavras ofensivas. Ao se cadastrar o usuário fica ciente que qualquer descumprimento dessas diretrizes, os administradores podem excluir a conta infratora, com ou sem aviso prévio.
                        
                    </p>
                    
                    <h3>
                        
                        Comentários e marcações
                        
                    </h3>
                    
                    <p>
                        
                        Os comentários e marcações realizados no Anotações Bíblicas, ficarão disponíveis para visualização, apenas para quem o realizou (quando definido como privado), não sendo possível que outros usuários vejam. Os administradores não usarão ou disponibilizarão esses comentários sem a devida permissão de seus autores. Já os comentários definidos como público poderão ser usados para fins diversos.
                        
                    </p>
                
                </div>
                
            </div>
            
            <!-- Início do rodapé e livros ******************************* -->
            
            <?php
            
            include 'phpPartes/rodape.php';
            
            ?>
        
        </div>
        
    </body>
</html>
