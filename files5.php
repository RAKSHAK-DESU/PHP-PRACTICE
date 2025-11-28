<?php
$dir = "./images";

$allowed=['png','jpg','jpeg','gif'];

if (file_exists($dir)) {
    $dp = opendir($dir);
    for (; $file= readdir($dp); ) { 
        if (!($file=="."||$file=="..")) {
            $ext = substr($file,strpos($file,".")+1);
            
            if ( in_array($ext,$allowed)) {
              //  echo $file."<br>";
              echo "<img src='images/$file' height='200' >";
            }
        }
    }
  //  var_dump($file);
} else {
    echo "<p>$dir not found , cannot open</p>";
}
