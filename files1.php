<?php
    $file="ray.txt";
    //read Operation

    if(is_file($file)){
        echo file_get_contents($file);
    }else{
        echo"<h1>File not Found<h1>";
    }
    
?>