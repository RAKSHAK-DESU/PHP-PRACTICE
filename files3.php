<?php
    $folder="C:/Users/RAKSHAK HINGAWE/OneDrive/Desktop/2025 VISION BOARD";

    if (!file_exists($folder)) {
        mkdir($folder); //true-> 1
        echo"$folder is created.....";
    }else{
        echo "$folder already exists";
    }
?>
//CREATE A DIRECTORY 