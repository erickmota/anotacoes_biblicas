<?php

class numeroCapitulo {
    
    public $livro;
    
    public function mostrarVersiculo($versao){
        
        include 'conexao.class.php';
        
        $livro = $this->livro;
        
        $sql = mysqli_query($conn, "SELECT * FROM livros WHERE liv_nome='$livro'");
        while ($row = mysqli_fetch_array($sql)) {
            
            $nomeLivro = $row["liv_id"];
            
            $sql2 = mysqli_query($conn, "SELECT ver_capitulo FROM versiculos WHERE ver_liv_id='$nomeLivro' AND ver_vrs_id='2' ORDER BY ver_capitulo desc");
            $row2 = mysqli_fetch_array($sql2);
                
                $numeros = $row2["ver_capitulo"];
                
                $livro2 = urlencode($livro);
                
                for($i=1; $i<=$numeros; $i++){
                    
                    echo "<a href='$livro2/$i/$versao'><div id='corpoNumeros'>$i</div></a>";
                    
                }
                
            
            
        }
        
    }
    
}

?>