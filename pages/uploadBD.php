<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            
            <form method="POST" action="php/uploadBD.php">
                
                <input type="number" placeholder="Versão" name="versao"><br>
                
                <input type="number" placeholder="ID Livro" name="idlivro"><br>
                
                <input type="number" placeholder="capitulo" name="capitulo"><br>
                
                <textarea placeholder="Texto" name="texto" style="width: 900px; height: 550px"></textarea><br>
                
                <input type="submit">
                
            </form>
            
            <?php
            
            $nome = "erick  11";
            
            $array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12);
            
            $nova = str_replace($array, "|", $nome);
            
            echo "$nova";
            
            ?>
            
        </div>
    </body>
</html>
