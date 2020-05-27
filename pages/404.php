<!-- Título do projeto: Anotações bíblicas
Descrição: Página inicial do projeto
Autor: Erick Mota
Versão: Alfa
Última atualização 21/08/2018 - 01:34 -->

<html>
    <head>
        <title>Anotações Bíblicas</title>
        <?php
        
            include_once './php/configBase.php';
        
        ?>
        
        <?php

        include "php/loginFalse.php";

        ?>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/icone.png" />
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/404.css" type="text/css" media="all and (min-width: 1050px)">
        <link rel="stylesheet" href="css/404Cel.css" type="text/css" media="all and (min-width: 0px) and (max-width: 1049px)">
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
                    
                    <img src="img/404.jpg" width="150px" class="img404">
                    
                    <h1 class="mt-2">Erro 404</h1>
                    
                    <p class="mt-3">
                        
                        A página <font class="linkAtual"><?php echo $_SERVER["REQUEST_URI"] ?></font> não foi encontrada.
                        
                    </p>
                    
                    <p>
                        
                        Navegue até a <a href="">página inicial</a>, ou em caso de bugs contate os administradores <a href="https://erickmota.com" target="_blank">clicando aqui</a>
                        
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
