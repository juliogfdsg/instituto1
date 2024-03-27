<?php

$pasta = "arquivos/";
$diretorio = dir($pasta);

while($arquivo = $diretorio->read()){
    if($arquivo != '.' && $arquivo != '..'){
        echo "<img src= '".$pasta.$arquivo."' width='300'>"; ?>





        

        
        
        <?php


    }
    
}

?>