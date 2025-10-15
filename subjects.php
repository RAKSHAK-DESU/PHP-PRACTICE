<html>
    <head>
        <title>Subject</title>
    </head>
    <body>
        <h1>Subjects List</h1>
        <?php
            $subjects=['HTML','CSS','JS','React Js','PHP&MySql','Laravel','Docker','AWS','MySql']
        ?>
        <ul>
            <?php
                for ($i=0; $i <count($subjects) ; $i++) { 
                    echo "<li>".$subjects[$i]."</li>";
                }    
            ?>
        </ul>
    </body>
</html>