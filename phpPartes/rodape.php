<?php

@$explode = explode("/", $_GET["url"]);

?>

<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="./cssPartes/rodape.css" type="text/css" media="all and (min-width: 1050px)">
<link rel="stylesheet" href="./cssPartes/rodapeCel.css" type="text/css" media="all and (min-width: 0px) and (max-width: 1049px)">

<div id="crodape">
                
                <div id="livros">
                    
                    <div id="cVelhoTestamento">
                        
                        <table border="0px" cellpading="0px" cellspacing="0px">
                            
                            <tr>
                                
                                <td class="tituloVelhoTestamento">Velho Testamento</td>
                                
                            </tr>
                            
                            <tr>
                                
                                <td>
                                    
                                    <ul class="lVelhoTestamento1">
                                        
                                        <li><a href="Gênesis/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Gênesis</a></li>
                                        <li><a href="Êxodo/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Êxodo</a></li>
                                        <li><a href="Levítico/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Levítico</a></li>
                                        <li><a href="Números/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Números</a></li>
                                        <li><a href="Deuteronômio/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Deuteronômio</a></li>
                                        <li><a href="Josué/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Josué</a></li>
                                        <li><a href="Juízes/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Juízes</a></li>
                                        <li><a href="Rute/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Rute</a></li>
                                        <li><a href="<?php echo urlencode("1 Samuel") ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">1 Samuel</a></li>
                                        <li><a href="<?php echo urlencode("2 Samuel") ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">2 Samuel</a></li>
                                        <li><a href="<?php echo urlencode("1 Reis") ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">1 Reis</a></li>
                                        <li><a href="<?php echo urlencode("2 Reis") ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">2 Reis</a></li>
                                        <li><a href="<?php echo urlencode("1 Crônicas") ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">1 Crônicas</a></li>
                                        <li><a href="<?php echo urlencode("2 Crônicas") ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">2 Crônicas</a></li>
                                        <li><a href="Esdras/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Esdras</a></li>
                                        <li><a href="Neemias/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Neemias</a></li>
                                        <li><a href="Ester/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Ester</a></li>
                                        <li><a href="Jó/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Jó</a></li>
                                        <li><a href="Salmos/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Salmos</a></li>
                                        <li><a href="Provérbios/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Provérbios</a></li>
                                        
                                    </ul>
                                    
                                </td>
                                
                                <td>
                                    
                                    <ul class="lVelhoTestamento2">
                                        
                                        <li><a href="Eclesiastes/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Eclesiastes</a></li>
                                        <li><a href="Cânticos/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Cânticos</a></li>
                                        <li><a href="Isaías/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Isaías</a></li>
                                        <li><a href="Jeremias/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Jeremias</a></li>
                                        <li><a href="Lamentações/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Lamentações</a></li>
                                        <li><a href="Ezequiel/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Ezequiel</a></li>
                                        <li><a href="Daniel/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Daniel</a></li>
                                        <li><a href="Oséias/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Oséias</a></li>
                                        <li><a href="Joel/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Joel</a></li>
                                        <li><a href="Amós/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Amós</a></li>
                                        <li><a href="Obadias/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Obadias</a></li>
                                        <li><a href="Jonas/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Jonas</a></li>
                                        <li><a href="Miquéias/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Miquéias</a></li>
                                        <li><a href="Naum/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Naum</a></li>
                                        <li><a href="Habacuque/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Habacuque</a></li>
                                        <li><a href="Sofonias/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Sofonias</a></li>
                                        <li><a href="Ageu/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Ageu</a></li>
                                        <li><a href="Zacarias/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Zacarias</a></li>
                                        <li><a href="Malaquias/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Malaquias</a></li>
                                        
                                    </ul>
                                    
                                </td>
                                
                            </tr>
                            
                        </table>
                        
                    </div>
                    
                    <div id="cNovoTestamento">
                        
                        <table border="0px" cellpading="0px" cellspacing="0px">
                            
                            <tr>
                                
                                <td class="tituloNovoTestamento">Novo Testamento</td>
                                
                            </tr>
                            
                            <tr>
                                
                                <td>
                                    
                                    <ul class="lNovoTestamento1">
                                        
                                        <li><a href="Mateus/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Mateus</a></li>
                                        <li><a href="Marcos/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Marcos</a></li>
                                        <li><a href="Lucas/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Lucas</a></li>
                                        <li><a href="João/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">João</a></li>
                                        <li><a href="Atos/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Atos</a></li>
                                        <li><a href="Romanos/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Romanos</a></li>
                                        <li><a href="<?php echo urlencode("1 Coríntios") ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">1 Coríntios</a></li>
                                        <li><a href="<?php echo urlencode("2 Coríntios") ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">2 Coríntios</a></li>
                                        <li><a href="Gálatas/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Gálatas</a></li>
                                        <li><a href="Efésios/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Efésios</a></li>
                                        <li><a href="Filipenses/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Filipenses</a></li>
                                        <li><a href="Colossenses/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Colossenses</a></li>
                                        <li><a href="<?php echo urlencode("1 Tessalonicenses") ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">1 Tessalonicenses</a></li>
                                        <li><a href="<?php echo urlencode("2 Tessalonicenses") ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">2 Tessalonicenses</a></li>
                                        
                                    </ul>
                                    
                                </td>
                                
                                <td>
                                    
                                    <ul class="lNovoTestamento2">
                                        
                                        <li><a href="<?php echo urlencode("1 Timóteo") ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">1 Timóteo</a></li>
                                        <li><a href="<?php echo urlencode("2 Timóteo") ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">2 Timóteo</a></li>
                                        <li><a href="Tito/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Tito</a></li>
                                        <li><a href="Filemom/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Filemom</a></li>
                                        <li><a href="Hebreus/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Hebreus</a></li>
                                        <li><a href="Tiago/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Tiago</a></li>
                                        <li><a href="<?php echo urlencode("1 Pedro") ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">1 Pedro</a></li>
                                        <li><a href="<?php echo urlencode("2 Pedro") ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">2 Pedro</a></li>
                                        <li><a href="<?php echo urlencode("1 João") ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">1 João</a></li>
                                        <li><a href="<?php echo urlencode("2 João")  ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">2 João</a></li>
                                        <li><a href="<?php echo urlencode("3 João") ?>/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">3 João</a></li>
                                        <li><a href="Judas/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Judas</a></li>
                                        <li><a href="Apocalipse/<?php
                                        
                                        if(isset($_COOKIE["nome_usuario"]) && isset($_COOKIE["email_usuario"]) && isset($_COOKIE["id_usuario"])){
                                            
                                            if(isset($capitulos)){
                                                
                                                echo $capitulos->retornaVersao();
                                                
                                            }else{
                                                
                                                include "./classes/exibirCapitulo.class.php";
                                            
                                                $capitulos = new exibirCapitulo();
                                                echo $capitulos->retornaVersao();
                                                
                                            }
                                            
                                        }else {
                                            
                                            if(isset($_GET["url"])){
                                                
                                                include "./php/verificaVersaoRodape.php";
                                                
                                            }else{
                                                
                                                echo "acf";
                                                
                                            }
                                            
                                        }
                                        
                                        ?>">Apocalipse</a></li>
                                        
                                    </ul>
                                    
                                </td>
                                
                            </tr>
                            
                        </table>
                        
                    </div>
                    
                </div>
                    
                </div>

                <div id="rodape">
                    
                    <div class="pt-4 pb-3">
                    
                        <p>

                            <a href="https://erickmota.com" target="_blank"><img src="img/LogoErick.png" width="150px;"></a>

                        </p>

                        <p class="text-white font-weight-bold">

                            <a class="text-white" href="https://www.facebook.com/anotacaobiblica/?modal=admin_todo_tour" target="_blank">Facebook</a>&nbsp&nbsp&nbsp
                            <a class="text-white" href="tutorial">Como usar?</a>&nbsp&nbsp&nbsp
                            <a class="text-white" href="politica">Política de uso</a>

                        </p>

                        <p class="font-weight-light text-white">

                            © Copyright 2018-2020&nbsp&nbsp&nbsp
                            1.6.3

                        </p>
                    
                    </div>
                        
                </div>
                
            </div>

