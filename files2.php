<!DOCTYPE html>
<html>
    <head>
        <style>
            #operate{
                color: aqua;
            }
            #al{
                color: red;
            }
        </style>
    </head>
</html>
<?php
    $file="rakshak.txt";
    if (is_file("rakshak.txt")) {
        unlink($file);
        echo "<p id='operate'>$file deleted successfully<p>";
    }else{
        echo "<p id='al'>$file already deleted<p>";
    }
?>