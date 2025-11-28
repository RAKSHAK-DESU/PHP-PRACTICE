<?php
    $dir= "C:/Users/RAKSHAK HINGAWE/OneDrive/Desktop/2026 VISION BOARD";

    if (is_dir($dir)) {
        rmdir($dir);
        echo"$dir is Deleted";
    }else {
        echo"$dir is already Deleted";
    }
?>