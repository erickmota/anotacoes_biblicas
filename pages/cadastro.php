

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
        
        <title>Cadastro - Anotações Bíblicas</title>
        
        <?php
        
            include_once './php/configBase.php';
        
        ?>
        
        <?php

        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])) {

            echo "<script>window.location='./'</script>";

        }

        include "php/loginFalse.php";

        ?>
        
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/icone.png" />
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/cadastro.css" type="text/css" media="all and (min-width: 1050px)">
        <link rel="stylesheet" href="css/cadastroCel.css" type="text/css" media="all and (min-width: 0px) and (max-width: 1049px)">
        
        <!--        Inserindo Bootstrap-->
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        
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
                        
                        Faça seu cadastro
                        
                    </h1>
                    
                    <div id="cConteudoT">
                        
                        <br><font class="text-info">Faça seu cadastro, e tenha suas anotações com você o tempo todo,
                        seja no computador, tablet ou celular !<br>
                        Ao se cadastrar, você concorda com nossa <a href="politica" target="_blank">política de privacidade</a></font><br><br><br>
                        
                        <div id="corpoT">
                        
                        <div id="localImg">
                            
                            <a href="https://play.google.com/store/apps/details?id=com.myname.anotacoesbiblicas" target="_blank"><img src="img/iconeCadastro.png" class="imgIcone"></a>
                            
                        </div>
                        
                        <div id="localForm">
                        
                            <form method="POST" action="php/cadastrar.php">
                                
                                <div class="form-group">

                                    <label class="labelCadastro">Insira seu nome:</label>

                                    <input type="text" class="form-control campo" autocomplete="off" id="campoNome" maxlength="14" required name="nome" placeholder="Ex: JoãoDaSilva" pattern="[A-Za-z0-9][\wÀ-ú]*">
                                    <div class="text-left invalid-feedback">
                                        Esse nome já está sendo utilizado, por favor, tente outro!
                                    </div>
                                    
                                    <small id="labelCampoNome" class="text-left form-text text-muted">Não coloque espaços ou caracteres especiais</small>
                                
                                </div>
                                
                                <div class="form-group">

                                    <label class="labelCadastro">Insira seu e-mail:</label>

                                    <input type="email" class="form-control campo" required name="email" placeholder="Use um e-mail válido">
                                
                                </div>
                                
                                <div class="form-group">

                                    <label class="labelCadastro">Crie uma senha:</label>

                                    <input type="password" class="form-control campo" required name="senha">
                                
                                </div>
                                
                                <div class="form-group">

                                    <label class="labelCadastro">confirme a senha:</label>

                                    <input type="password" class="form-control campo" required name="cSenha">
                                
                                </div>
                                
                                <input type="submit" class="btn btn-primary float-right" value="Cadastrar">

                            </form>
                            
                            <script>
                            
                            function buscar (nome) {
	
                                $.ajax({

                                    type: "POST",
                                    dataType: "html",

                                    url: "php/ajaxVerificaNomeUsuario.php",

                                    //  beforeSend: function () {
                                    //	  
                                    //	  $("#loading").html("<img src='img/loading.gif' width='40px'>");
                                    //	  
                                    //	  },
                                    //	  
                                    data: {nome: nome},

                                success: function (msg) {

                                    $("#campoNome").html(msg)

                                    }

                                });

                            }

                            $("#campoNome").keyup(function(){

                                buscar($("#campoNome").val())

                            });
                            
                            </script>
                            
                        </div>
                            
                        </div>
                        
                        <div id="corpoLembrar">
                                
                            <font class="text-info">Preencha o campo abaixo, com o seu e-mail cadastrado. Iremos enviar sua senha logo em seguida !</font><br><br>

                            <form class="col-md-6" method="POST" action="php/lembrarSenha.php">
                                
                                <div class="form-group">

                                    <input type="email" required class="form-control campoLembrar" placeholder="Digite aqui seu e-mail cadastrado" name="email">
                                
                                </div>

                                <input type="submit" class="btn btn-secondary" value="Esqueci a senha">

                            </form>                                
                                
                        </div>
                    
<!--                        <font class="apresentacaoCad">Faça seu cadastro, e tenha suas anotações com você o tempo todo,
                        seja no computador, tablet ou celular !<br>
                        Ao se cadastrar, você concorda com nossa <a href="politica" target="_blank">política de privacidade</a></font><br><br>
                        
                        <form method="POST" action="php/cadastrar.php">
                            
                            <table border="0px" cellpadding="10px">
                                
                                <tr>
                                    
                                    <td>
                                        
                                        Nome:
                                        
                                    </td>
                                    <td>
                                        
                                        <input type="text" class="campo" maxlength="20" required name="nome">
                                        
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                    
                                    <td>
                                        
                                        E-mail:
                                        
                                    </td>
                                    <td>
                                        
                                        <input type="email" class="campo" required name="email">
                                        
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                    
                                    <td>
                                        
                                        Senha:
                                        
                                    </td>
                                    <td>
                                        
                                        <input type="password" class="campo" required name="senha">
                                        
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                    
                                    <td>
                                        
                                        Confirmar senha:
                                        
                                    </td>
                                    <td>
                                        
                                        <input type="password" class="campo" required name="cSenha">
                                        
                                    </td>
                                    
                                </tr>
                                
                                <tr>
                                    
                                    <td></td>
                                    <td>
                                        
                                        <input type="submit" class="botaoEnviarCad" value="Cadastrar">
                                        
                                    </td>
                                    
                                </tr>
                                
                            </table>
                            
                        </form>
                        
                        <font class="apresentacaoCad">Preencha o campo abaixo, com o seu e-mail cadastrado. Iremos enviar sua senha logo em seguida !</font><br><br>
                        
                        <form method="POST" action="php/lembrarSenha.php">
                            
                            <input type="email" required class="campo" placeholder="Digite aqui seu e-mail cadastrado" name="email"><br><br>
                            
                            <input type="submit" class="botaoLembrar" value="Esqueci a senha">
                            
                        </form>-->
                    
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
