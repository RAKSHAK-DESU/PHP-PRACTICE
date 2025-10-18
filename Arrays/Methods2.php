<pre>
<?php
    $a1=[10,20,10,30,30,40,40,40];

    $ans=array_unique($a1);
    print_r($ans);

    $a2=[34,54,23,76,87,32];
    echo array_push($a2,3);

    array_unshift($a2,70);

    print_r($a2);

    echo array_pop($a2);

    $a3=[];
    $a3[]=10;
    $a3[]=20;
    $a3[]=30;
    $a3[]=40;
    $a3[]=54;
    $a3[]=60;

    print_r($a3);
?>
</pre>