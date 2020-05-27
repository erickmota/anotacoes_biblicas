<?php

include "../classes/email.class.php";

include "../classes/conexao.class.php";

$classeEmail = new email();

$classeEmail->texto = $_POST["texto"];
$classeEmail->assunto = $_POST["assunto"];
//$classeEmail->emailDestino = $_POST["email"];
$classeEmail->emailOrigem = "contato@anotacoesbiblicas.com";

$sql = mysqli_query($conn, "SELECT email FROM usuarios");
$num = mysqli_num_rows($sql);
while($row = mysqli_fetch_array($sql)){
    
    $i = 0;
    
    $email[$i] = $row["email"];
    
    $classeEmail->emailDestino = $email[$i];
    
    $classeEmail->mandarEmail();
    
    $i++;
    
}

echo "<script>alert ('Seu e-mail foi enviado com sucesso.');window.location='../admin'</script>";

?>