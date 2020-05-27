<?php

if(isset($explode[0]) && !isset($explode[1]) && !isset($explode[2]) && !isset($explode[3])){

    echo "acf";

}else if(isset($explode[0]) && isset($explode[1]) && !isset($explode[2]) && !isset($explode[3])){
    
    if($explode[1] == "acf" || $explode[1] == "aa" || $explode[1] == "nvi"){
        
        echo $explode[1];
        
    }else{
        
        echo "acf";
        
    }

}else if(isset($explode[0]) && isset($explode[1]) && isset($explode[2]) && !isset($explode[3])){

    echo $explode[2];

}else if(isset($explode[0]) && isset($explode[1]) && isset($explode[2]) && isset($explode[3])){

    echo $explode[3];

}

?>
