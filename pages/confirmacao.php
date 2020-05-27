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
        
        include "classes/email.class.php";
        
        $classeEmail = new email();
        
        $classeEmail->texto = "Seja bem vindo ao Anotações Bíblicas. Basta clicar no link abaixo, para confirmar seu cadastro.<br>"
                . "Caso você não tenha sido o responsável pelo cadastro, favor desconsiderar.<br><br>"
                . "<a href='https://anotacoesbiblicas.com/confirmaremail/$explode[1]'>https://anotacoesbiblicas.com/confirmaremail/$explode[1]</a>";

        $classeEmail->assunto = "Confirmar email";

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
                color: white;
                
            }
            
        </style>
        
    </head>
    
    <body>
        
        <div align="center">
        
            <img src="img/logo.png" onclick="window.location='./'">

            <div id="mensagem">
                
                Obrigado por usar o Anotações Bíblicas, você está a poucos passos de concluir seu cadastro !<br><br>
                <font class="subMensagem">Enviamos um e-mail para "<?php echo base64_decode($explode[1]) ?>", verifique a caixa de entrada ou spans, e clique no link<br>
                para confirmar o cadastro.<br><br>
                
                Em caso de não recebimento, <a onclick="alert('O e-mail será enviado novamente, verifique sua caixa de entrada ou spans.'); location.reload()" class="cliqueaqui">clique aqui</a> e te enviaremos um novo e-mail.<br>
                Ou <a href="" class="cliqueaqui">clique aqui</a> para retornar à página principal.</font>
                
            </div>
        
        </div>
        
    </body>
    
</html>
