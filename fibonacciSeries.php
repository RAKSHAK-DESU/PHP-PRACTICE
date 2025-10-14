<?php
$a = 0;
$b = 1;

echo $a;
echo $b;
for ($i = 0; $i < 10; $i++) {

    $c = $a + $b;
    
    echo $c . " ";

    $a=$b;
    $b=$c;
}
