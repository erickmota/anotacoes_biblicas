<?php

class admin {
    
    public function exibirUsuarios(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM usuarios ORDER BY id desc");
        while ($row = mysqli_fetch_array($sql)){
            
            $id = $row["id"];
            $estado = $row["estado"];
            $nome = $row["nome"];
            $email = $row["email"];
            $login = $row["login"];
            $data = $row["data_cadastro"];
            $foto = $row["img"];
            
            if($foto == NULL){
                
                $foto = "semImagem.jpg";
                
            }
            
            $dia = substr($data, 8, 2);
            $mes = substr($data, 5, 2);
            $ano = substr($data, 0, 4);
            $hora = substr($data, 11, 2);
            $minuto = substr($data, 14, 2);
            
            if($data == NULL){
                
                $dataCompleta = "Data indefinida";
                
            }else{
                
                $dataCompleta = "$dia/$mes/$ano - $hora:$minuto";
                
            }
            
            $sql2 = mysqli_query($conn, "SELECT * FROM comentarios WHERE id_usuario = '$id'");
            $num2 = mysqli_num_rows($sql2);
            
            $sql3 = mysqli_query($conn, "SELECT * FROM marcacoes WHERE id_usuario = '$id'");
            $num3 = mysqli_num_rows($sql3);
            
            if($estado == "pendente"){
                
                $corEstado = "class='bg-danger text-white'";
                
            }else{
                
                $corEstado = "";
                
            }
            
            echo "<tr $corEstado>
                    <td><img src='./img/$foto' class='fotoPerfil'></img></td>
                    <td>$nome</td>
                    <td>$login</td>
                    <td>$num2</td>
                    <td>$num3</td>
                    <td>$dataCompleta</td>
                    <td>

                          <a data-toggle='modal' data-target='#exampleModal' data-email='$email' data-nome='$nome'><img class='imgEmail' src='https://img.icons8.com/color/30/000000/secured-letter.png'></a>

                    </td>

                    <td>" ?>

                    <img class="imgEmail" onclick="if (window.confirm('Tem certeza que deseja apagar <?php echo $nome ?> do sistema?')) {window.location='php/apagarContaAdmin.php?id=<?php echo $id ?>'} else {}" src="https://img.icons8.com/color/30/000000/remove-user-male.png">
                    
                    <?php

                    echo "</td>
                  </tr>";
            
        }
        
        
    }
    
    public function exibirPassagensErradas(){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM passagens_erradas ORDER BY id ASC");
        while ($row = mysqli_fetch_array($sql)){
            
            $id = $row["id"];
            $livro = $row["livro"];
            $capitulo = $row["capitulo"];
            $verso = $row["verso"];
            $versao = $row["versao"];
            
            if($versao == 1){
                
                $versao2 = "AA";
                
            }elseif($versao == 2){
                
                $versao2 = "ACF";
                
            }elseif($versao == 3){
                
                $versao2 = "NVI";
                
            }
            
            $sql2 = mysqli_query($conn, "SELECT * FROM livros WHERE liv_nome='$livro'");
            while($row2 = mysqli_fetch_array($sql2)){
            
            $id_livro = $row2["liv_id"];
            
            $sql3 = mysqli_query($conn, "SELECT * FROM versiculos WHERE ver_liv_id='$id_livro' AND ver_capitulo='$capitulo' AND ver_versiculo='$verso' AND ver_vrs_id='$versao'");
            $row3 = mysqli_fetch_array($sql3);
            
            $passagem = $row3["ver_texto"];
            
            echo "<tr>
                    <td>$livro</td>
                    <td>$capitulo</td>
                    <td>$verso</td>
                    <td>$versao2</td>
                    <td>

                          <a data-toggle='modal' data-target='#modalLivro' data-texto='$passagem' data-livro='$livro' data-capitulo='$capitulo' data-verso='$verso' data-versao='$versao2' data-id='$id'><img class='imgEmail' src='https://img.icons8.com/color/30/000000/edit-property.png'></a>

                    </td>

                    <td>

                          <a href='php/apagarPassagem.php?id=$id'><img class='imgEmail' src='https://img.icons8.com/color/30/000000/close-window.png'></a>

                    </td>
                  </tr>";
            
            }
            
        }
        
    }
    
    public function atualizarVerso($texto, $livro, $capitulo, $verso, $versao){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "SELECT * FROM livros WHERE liv_nome='$livro'");
        while($row = mysqli_fetch_array($sql)){
            
            $idLivro = $row["liv_id"];
            
            if($versao == "AA"){
                
                $versao2 = 1;
                
            }elseif($versao == "ACF"){
                
                $versao2 = 2;
                
            }elseif($versao == "NVI"){
                
                $versao2 = 3;
                
            }
        
            $sql2 = mysqli_query($conn, "UPDATE versiculos SET ver_texto='$texto' WHERE ver_vrs_id='$versao2' AND ver_liv_id='$idLivro' AND ver_capitulo='$capitulo' AND ver_versiculo='$verso'");
        
        }
        
    }
    
    public function apagarPassagem($idPassagens){
        
        include 'conexao.class.php';
        
        $sql = mysqli_query($conn, "DELETE FROM passagens_erradas WHERE id='$idPassagens'");
        
    }
    
}

?>