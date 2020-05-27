<?php

class cadastrar{
    
    public $nome;
    public $email;
    public $senha;
    public $cSenha;
    
    public function cadastrarUsuario(){
        
        include 'conexao.class.php';
        
        if($this->senha != $this->cSenha){
            
            echo "<script>window.alert('Senha e confirmação de senha não confere, tente novamente !'); window.location='../cadastro'</script>";
            
        }else{
            
            $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE email='$this->email'");
            $linha = mysqli_num_rows($sql);
            
            if($linha == 1){
                
                echo "<script>window.alert('Esse e-mail já está cadastrado em nossa base de dados, tente clicar no botão: Esqueci a senha !'); window.location='../cadastro'</script>";
                
            }else{
                
                $novaSenha = base64_encode($this->senha);
                
                $novoEmail = base64_encode($this->email);
                
                $dataCadastro = date("Y-m-d H:i:s");
                
                $sql2 = mysqli_query($conn, "INSERT INTO usuarios (estado, nome, email, senha, anotacoesrapidas, livro, capitulo, login, livro1, capitulo1, livro2, capitulo2, livro3, capitulo3, versao, data_cadastro, img, sobre) VALUES ('pendente', '$this->nome', '$this->email', '$novaSenha', '', 'Mateus', 1, 0, 'João', 3, 'Efésios', 2, '1 Coríntios', 14, 'acf', '$dataCadastro', '', 'Olá, seja bem vindo ao meu perfil público. João 3:16 - Porque Deus amou o mundo de tal maneira que deu o seu Filho unigênito, para que todo aquele que nele crê não pereça, mas tenha a vida eterna.')") or die("Erro no cadastro");
                
                echo "<script>window.location='../confirmacao/$novoEmail'</script>";
                
            }
            
        }
        
    }
    
    public function lembrarSenha($emailDestino){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE email='$emailDestino'");
        $linha = mysqli_num_rows($sql);
        
        if($linha == 0){
            
            echo "<script>window.alert('E-mail não cadastrado !'); window.location='../cadastro'</script>";
            
        }else{
            
            $row = mysqli_fetch_array($sql);
            $senha = $row["senha"];
            $novaSenha = base64_decode($senha);
            
            $nome = "Anotações Bíblicas";
            $email = "contato@anotacoesbiblicas.com";
            $emaildestino = $emailDestino;
            $assunto = "Lembrete de senha";
            $texto = "Sua senha é: $novaSenha";

            $corpo = "<b>Mensagem:</b> {$texto}"."<br><br>"
                    . "<img src='https://anotacoesbiblicas.com/img/logoEmailAB.png'>";

            $header = "MIME-Version: 1.0\n";
            $header .= "Content-type: text/html; charset=utf-8\n";
            $header .= "from: $email\n";

            @mail ($emaildestino,$assunto,$corpo,$header);

            echo "<script>window.alert('Verifique seu e-mail e também a caixa de spans !');window.location='../cadastro'</script>";
            
        }
        
    }
    
}

?>