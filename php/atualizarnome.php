<?php

include '../classes/conexao.class.php';

//*****Atualizando nomes repetidos com algo no final.*****

$sql = mysqli_query($conn, "SELECT * FROM usuarios ORDER BY id ASC");
$num = mysqli_num_rows($sql);
while($linha = mysqli_fetch_array($sql)){
    
    $idPrimario = $linha["id"];
    
    $sql2 = mysqli_query($conn, "SELECT * FROM usuarios WHERE id!=$idPrimario ORDER BY id ASC");
    while($linha2 = mysqli_fetch_array($sql2)){
        
        $idSecundario = $linha["id"];
        
        if($linha2["nome"] == $linha["nome"]){
            
            //***Definir o que acrescentar no final do nome***.
            
            $novoNome = $linha2["nome"]."2";

            $sql3 = mysqli_query($conn, "UPDATE usuarios SET nome='$novoNome' WHERE id=$idSecundario");

        }
        
    }
    
}

//*****Tirando os espaços dos nomes.*****

$i = 1;

while($i <= 340){
    
    $sql4 = mysqli_query($conn, "SELECT nome FROM usuarios WHERE id=$i ORDER BY id ASC");
    $linha3 = mysqli_fetch_array($sql4);
    
    $nome = $linha3["nome"];
    
    $novoNome2 = str_replace(" ", "", $linha3["nome"]);
    
    $sql5 = mysqli_query($conn, "UPDATE usuarios SET nome='$novoNome2' WHERE id=$i");
    
    $i++;
    
}

?>