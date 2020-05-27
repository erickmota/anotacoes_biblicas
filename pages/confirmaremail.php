<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <head>
        
        <title>Anotações Bíblicas - Confirmação</title>
        
        <?php
        
            include_once './php/configBase.php';
        
        ?>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <?php
        
        @$explode = explode("/", $_GET["url"]);
        
        $classeVerifica = new verificaExistenciaBd();
        
        if($classeVerifica->verificaEmail(base64_decode($explode[1])) != 1){
            
            die ("<script>window.location='./'</script>");
            
        }else{
            
            if($classeVerifica->verificaEstado(base64_decode($explode[1])) == "confirmado"){
                
                die ("<script>window.location='./'</script>");
                
            }
            
        }
        
        include "classes/verificaUsuario.class.php";
        
        $classeVerificaUsuario = new usuario();
        
        $classeVerificaUsuario->atualizarEstado(base64_decode($explode[1]));
        
        $nomeUsuario = $classeVerificaUsuario->retornaNome(base64_decode($explode[1]));
        
        include "classes/email.class.php";
        
        $classeEmail = new email();
        
        // Email para Anotações Bíblicas
        
        $classeEmail->texto = "Um novo usuário chamado: <b>$nomeUsuario</b>, se cadastrou no Anotações Bíblicas.";

        $classeEmail->assunto = "Novo cadastro";

        $classeEmail->emailDestino = "contato@anotacoesbiblicas.com";

        $classeEmail->emailOrigem = "contato@anotacoesbiblicas.com";

        $classeEmail->mandarEmail();
        
        // Email para usuário
        
        $classeEmail->texto = "<b>Bem vindo ao Anotações Bíblicas!</b><br><br>

Seja bem vindo ao Anotações Bíblicas $nomeUsuario, agora você terá acesso aos seus comentários e marcações, tanto de seu celular
ou tablet android, como de seu computador!<br><br>

Baixe o App na Play Store <a href='https://play.google.com/store/apps/details?id=com.myname.anotacoesbiblicas'>clicando aqui</a>.<br>
Ou acesse o site, através do endereço <a href='https://anotacoesbiblicas.com/'>anotacoesbiblicas.com</a><br><br>

Lembrando que, com o Anotações Bíblicas, você pode começar seus estudos no PC e terminar no celular, ou vice-versa, pois, as suas
anotações e marcações, ficarão salvas em nossa base de dados <b>online</b>.<br><br>

Esperamos que o Anotações Bíblicas possa te auxiliar em seus estudos diários da Palavra de Deus!<br><br>

Atenciosamente Anotações Bíblicas.";

        $classeEmail->assunto = "Boas vindas";

        $classeEmail->emailDestino = base64_decode($explode[1]);

        $classeEmail->emailOrigem = "contato@anotacoesbiblicas.com";

        $classeEmail->mandarEmail();
        
        ?>
        
        <style>
            
            #mensagem {
                
                color: #FFFFFF;
                font-size: 23px;
                margin-top: 40px;
                
            }
            
            body {
                
                background-color: #00a8ec;
                
            }
            
            img {
                
                padding-bottom: 10px;
                border-bottom: #FFFFFF dashed 1px;
                margin-top: 50px;
                cursor: pointer;
                
            }
            
            .subMensagem {
                
                font-size: 20px;
                
            }
            
            .cliqueaqui {
                
                text-decoration: underline;
                cursor: pointer;
                
            }
            
        </style>
        
        <script language= "JavaScript">
            
        setTimeout("document.location = './'",5000);
        
        </script>
        
    </head>
    
    <body>
        
        <div align="center">
        
            <img src="img/logo.png" onclick="window.location='./'">

            <div id="mensagem">
                
                Parabéns, seu cadastro foi efetuado com sucesso !<br><br>
                <font class="subMensagem">Agora basta fazer o login com seu e-amail e senha !<br>
                
                Caso não seja redirecionado dentro de <b>5 segundos</b>, <a href="./">clique aqui</a>.</font>
                
            </div>
        
        </div>
        
    </body>
    
</html>
