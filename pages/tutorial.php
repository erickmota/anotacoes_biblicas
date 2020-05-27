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
        
        <title>Como usar - Anotações Bíblicas</title>
        <?php
        
            include_once './php/configBase.php';
        
        ?>
        
        <?php

        include "php/loginFalse.php";

        ?>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/icone.png" />
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/tutorial.css" type="text/css" media="all and (min-width: 1050px)">
        <link rel="stylesheet" href="css/tutorialCel.css" type="text/css" media="all and (min-width: 0px) and (max-width: 1049px)">
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
                        
                        Como usar o Anotações Bíblicas
                        
                    </h1>
                    
                    <p>
                        
                        <a href="">Clique aqui</a> para pular o tutorial. Você pode acessar essa página a qualquer momento, clicando em <b>manual de usuário</b>, no rodapé do site !
                        
                    </p>
                    
                    <p>
                        
                        Seja bem-vindo ao Anotações Bíblicas, aqui você terá a possibilidade de realizar comentários e marcações em seus estudos bíblicos, e poderá leva-los para qualquer lugar, bastando apenas ter uma conexão com a internet e um navegador, pois o Anotações Bíblicas funciona um qualquer dispositivo, seja computador, celular ou tablet.
                        
                    </p>
                    
                    <p class="aviso">
                        
                        *Não se preocupe, os comentários e marcações que você realizar, ficará visível, apenas para você.
                        
                    </p>
                    
                    <p>
                        
                        Abaixo, você verá detalhadamente como usar os botões e recursos do Anotações bíblicas !
                        
                    </p>
                    
                    <h2>
                        
                        Como criar um comentário ou marcação para a passagem desejada ?
                        
                    </h2>
                    
                    <p>
                        
                        <b>1 –</b> Em quanto você estiver navegando por um capítulo, clique sobre o versículo a qual deseja comentar
                        
                    </p>
                    
                    <img src="img/ComentarTutorial.png" class="img1024">
                    
                    <p>
                        
                        <b>2 –</b> Irá abrir uma página, apenas contendo o versículo selecionado. Abaixo do versículo você verá três ícones de canetas marca texto (amarela, verde e vermelha), clique sobre uma delas, para marcar um versículo, ou no ícone “X” para apagar uma marcação.
                        
                    </p>
                    
                    <img src="img/VersiculoTutorial.png" class="img1024">
                    
                    <p>
                        
                        Para comentar o versículo, basta digitar um comentário no campo abaixo do versículo e clicar no botão “salvar”, que está na cor azul (o mesmo botão também servirá para atualizar um comentário). Para apagar um comentário, basta clicar no botão vermelho “Apagar”.
                        
                    </p>
                    
                    <p class="aviso">
                        
                        *Obs: A cor vermelha, não será considerada uma marcação. Use apenas como complemento de comentários !
                        
                    </p>
                    
                    <h2>
                        
                        Sub-Menu
                        
                    </h2>
                    
                    <img src="img/SubMenuTutorial.png" class="imgMenor">
                    
                    <p>
                        
                        <b>1 - Marcador:</b> Ao clicar nesse ícone, irá abrir um menu, contendo três opções de marcações, clique sobre uma das opções, para marcar a passagem. (A passagem ficará marcada, no <b>menu principal</b> do sistema).
                        
                    </p>
                    
                    <p>
                        
                        <b>2 – Modo leitura:</b> ao clicar nesse botão enquanto estiver visualizando um capítulo, você perderá a visão de seus comentários e marcações, além de não poder clicar nos versículos. Isso facilitará quando você estiver realizando a leitura do capítulo (comentários e marcações não atrapalharão),além de ficar muito mais fácil para copiar alguma passagem específica.
                        
                    </p>
                    
                    <p>
                        
                        <b>3 – Selecionar capítulo:</b> ao clicar nesse botão, você será redirecionado a seleção de capítulos do livro ao qual você está realizando a leitura.
                        
                    </p>
                    
                    <p>
                        
                        <b>4 – Selecionar livro:</b> ao clicar nesse botão você será redirecionado a seção de livros no rodapé do site.
                        
                    </p>
                    
                    <h2>
                        
                        Menu
                        
                    </h2>
                    
                    <img src="img/MenuTutorial.png" class="imgMenor">
                    
                    <p>
                        
                        <b>Minhas anotações:</b> Clique para exibir todos os seus comentários, com a possibilidade de selecionar comentários por livros desejados.
                        
                    </p>
                    
                    <p>
                        
                        <b>Minhas marcações:</b> Clique para exibir todas os suas marcações, com a possibilidade de selecionar marcações por livros desejados e por cores desejadas.
                        
                    </p>
                    
                    <p>
                        
                        <b>Configurações:</b> Selecione para enviar um feedback ao administrador do site (erros, elogios ou sugestões), e para excluir a sua conta.
                        
                    </p>
                    
                    <p>
                        
                        <b>Sair:</b> clique para deslogar de sua conta.
                        
                    </p>
                    
                    <p>
                        
                        Abaixo do botão <b>sair</b>, estará localizada as suas <b>marcações</b>, em suas respectivas posições.
                        
                    </p>
                    
                    <h2>
                        
                        Como realizar buscas por passagens bíblicas ?
                        
                    </h2>
                    
                    <p>
                        
                        Basta digitar um pedaço da passagem no campo de busca, e pressionar enter.
                        
                    </p>
                    
                    <img src="img/BuscarTutorial.png" class="img1024">
                    
                    <p>
                        
                        Esperamos que o Anotações Bíblicas, possa te ajudar em seus estudos bíblicos, muito obrigado ! <a href="">Clique aqui</a> para começar usar o sistema.
                        
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
