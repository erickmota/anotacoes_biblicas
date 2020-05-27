<?php

include "../classes/conexao.class.php";

$palavra = $_POST["palavra"];

?>

<table class="table table-striped mt-3 text-center">
						  <thead class="table-primary">
							<tr>
                                                          <th scope="col">Img</th>
							  <th scope="col">Nome</th>
							  <th scope="col">Acessos</th>
							  <th scope="col">Comentários</th>
							  <th scope="col">Marcações</th>
                                                          <th scope="col">Data Cadastro</th>
							  <th scope="col">E-mail</th>
							  <th scope="col">Excluir</th>
							</tr>
						  </thead>
						  <tbody>

<?php

$sql = mysqli_query($conn, "SELECT * FROM usuarios WHERE nome LIKE '%$palavra%' ORDER BY id DESC");
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

                    <td>"?>

                    <img class="imgEmail" onclick="if (window.confirm('Tem certeza que deseja apagar <?php echo $nome ?> do sistema?')) {window.location='php/apagarContaAdmin.php?id=<?php echo $id ?>'} else {}" src="https://img.icons8.com/color/30/000000/remove-user-male.png">
                    
                    <?php

                    echo "</td>
                  </tr>";

        }
?>

</tbody>
</table>