<?php

if(isset($_GET["url"])){
    
    $explode = explode("/", $_GET["url"]);
    $file = "pages/".$explode[0].".php";
    
    // Extância da classe VerificaExistenciaBd
    
    include 'classes/verificaexistenciabd.class.php';
    
    $classe = new verificaExistenciaBd();
    
    $classe->livro = $explode[0];
    
    // Verificação, para ver se é página ou se existe esse nome no banco "livros"
    
    if(is_file($file) || $classe->verificaLivro() == 1){
        
        // Verificando se é umas das páginas sem GET
        
        if($explode[0] == "cadastro" || $explode[0] == "politica" || $explode[0] == "tutorial" || $explode[0] == "configuracoes" || $explode[0] == "confirmacao" || $explode[0] == "confirmaremail" || $explode[0] == "admin" || $explode[0] == "loginAdmin" || $explode[0] == "historico" || $explode[0] == "perfil"){
            
            if($explode[0] == "perfil"){
                
                if(isset($explode[1])){
                    
                    if($classe->verificaUsuario($explode[1]) == true){
                        
                        include_once $file;
                        
                    }else{
                        
                        include_once 'pages/404.php';
                        
                    }
                    
                }else{
                    
                    include_once 'pages/404.php';
                    
                }
                
            }else{
                
                include_once $file;
                
            }
            
        // Verificando se é um capítulo inteiro
            
        }else if(isset($explode[0]) && isset($explode[1]) && isset($explode[2]) && !isset($explode[3]) && !isset($explode[4])){
            
            $classe->capitulo = $explode[1];
            $classe->versao = $explode[2];
            
            if($classe->verificaLivro() == 1 && $explode[1] <= $classe->verificaCapitulo() && $explode[1] > 0 && $classe->verificaVersao() == 1){
                
                include_once 'pages/home.php';
                
            }else{
                
                include_once 'pages/404.php';
                
            }
            
        // Verificando se é apenas um versículo isolado
            
        }else if(isset($explode[0]) && isset($explode[1]) && isset($explode[2]) && isset($explode[3]) && !isset($explode[4])){
            
            if($explode[0] == "anotacoes"){
                
                // Verificando se é a página de anotações pessoais
                
                $classe->livro = $explode[1];
                $classe->versao = $explode[2];
                
                if($classe->verificaLivro() == 1 || $explode[1] == "todos" || preg_match('/^busca/', $explode[1])){
                    
                    if($classe->verificaVersao() == 1){
                        
                        include_once 'pages/anotacoes.php';
                        
                    }else{
                        
                        include_once 'pages/404.php';
                        
                    }
                    
                }else{
                    
                    include_once 'pages/404.php';
                    
                }
                
            }else{
                
                if($classe->verificaUsuario($explode[3]) == true){
                    
                    include_once 'pages/home.php';
                    
                }else{
                    
                    $classe->capitulo = $explode[1];
                    $classe->versao = $explode[3];
                    $classe->versiculo = $explode[2];

                    if($classe->verificaLivro() == 1 && $explode[1] <= $classe->verificaCapitulo() && $explode[1] > 0 && $classe->verificaVersao() == 1 && $explode[2] <= $classe->verificaVersiculo() && $explode[2] > 0){

                        include_once 'pages/versiculos.php';

                    }else{

                        include_once 'pages/404.php';

                    }
                    
                }
            
            }
            
        }else if(isset($explode[0]) && isset($explode[1]) && !isset($explode[2]) && !isset($explode[3])){
            
            $classe->versao = $explode[1];
            
            if($classe->verificaLivro() == 1 && $classe->verificaVersao() == 1){
                
                include_once "pages/capitulo.php";
                
            }else{
                
                include_once 'pages/404.php';
                
            }
            
        }else if(isset($explode[0]) && isset($explode[1]) && isset($explode[2]) && isset($explode[3]) && isset($explode[4])){
            
            // Verifica se é a página marcações
            
            if($explode[0] == "marcacoes"){
                
                $classe->livro = $explode[1];
                $classe->versao = $explode[2];
                
                if($classe->verificaLivro() == 1 || $explode[1] == "todos"){
                    
                    if($classe->verificaVersao() == 1){
                        
                        if($explode[3] == "cores" || $explode[3] == "amarelo" || $explode[3] == "verde" || $explode[3] == "laranja" || $explode[3] == "azul" || $explode[3] == "roxo"){
                            
                            include_once 'pages/marcacoes.php';
                            
                        }else{
                            
                            include_once 'pages/404.php';
                            
                        }
                        
                    }else{
                        
                        include_once 'pages/404.php';
                        
                    }
                    
                }else{
                    
                    include_once 'pages/404.php';
                    
                }
                
            }else if($explode[0] == "busca"){
                
                // Verificação correspondente a página de buscas
                
                $classe->livro = $explode[2];
                $classe->versao = $explode[3];
                
                if($classe->verificaVersao() == 1){
                    
                    if($classe->verificaLivro() == 1 || $explode[2] == "todos"){
                        
                        include_once 'pages/busca.php';
                        
                    }else{
                        
                        include_once 'pages/404.php';
                        
                    }
                    
                }else{
                    
                    include_once 'pages/404.php';
                    
                }
                
            }else{
                
                include_once 'pages/404.php';
                
            }
            
        }else{
            
            include_once 'pages/404.php';
            
        }
        
    }else{
        
        include_once 'pages/404.php';
        
    }
    
}else{
    
    include_once 'pages/home.php';
    
}

?>