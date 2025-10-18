<pre>
<?php
    $subjects=["HTML","CSS","JavaScript","React","PHP","Laravel","Docker","AWS"];

    echo count($subjects);

    $subjects1=["HTML","CSS","JavaScript","React","PHP","Laravel","Docker","AWS"];

    echo sort($subjects1);

    print_r($subjects1);


    $a1= [10,20,30,40,50];
    $a2= [100,200,300,400,500];
    $a3=[1000,2000,3000,4000];

    $fa= array_combine($a1,$a2);

    print_r($fa);

    $fb= array_merge($a1,$a2,$a3);

    print_r($fb);
?>
</pre>