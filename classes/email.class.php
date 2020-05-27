<?php

class email{
    
    public $texto;
    
    public $assunto;
    
    public $emailDestino;
    
    public $emailOrigem;

    public function mandarEmail(){
        
        // *******************************************************************
        
        $corpo = $this->texto."<br><br>"
                . "<img src='https://anotacoesbiblicas.com/img/logoEmailAB.png'>";

        $header = "MIME-Version: 1.0\n";
        $header .= "Content-type: text/html; charset=utf-8\n";
        $header .= "from: $this->emailOrigem\n";

        @mail ($this->emailDestino,  $this->assunto, $corpo, $header);
        
    }
    
}

?>