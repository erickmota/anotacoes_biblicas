<?php

class inserirBDc{
    
    public $versao;
    public $idLivro;
    public $capitulo;
    public $texto;
    
    public function inserirBD(){
        
        include "conexao.class.php";
        
        $textoEx = explode("|", $this->texto);
        
        $contador = count($textoEx);
        
        $i = 1;
        
        while($i <= $contador){
            
            $i2 = $i - 1;
            
            $sql = mysqli_query($conn, "INSERT INTO versiculos (ver_vrs_id, ver_liv_id, ver_capitulo, ver_versiculo, ver_texto) VALUES ($this->versao, $this->idLivro, $this->capitulo, $i, '$textoEx[$i2]')") or die("Erro BD");
            
            $i++;
            
        }
        
        echo "<script>window.location='../uploadBD.php'</script>";
        
    }
    
}

?>