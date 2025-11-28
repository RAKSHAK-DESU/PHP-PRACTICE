<?php
    $file="rakshak.txt";
    //read Operation

    if(is_file($file)){
        echo file_get_contents($file);
    }else{
        echo"<h5>File not Found File $file is not available<h5>";
    }
    
?>  