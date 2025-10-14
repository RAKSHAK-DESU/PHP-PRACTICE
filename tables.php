<html>
    <head>
        <title>Print 2 to 20 Table</title>
        <style>
            .block{
                display: flex;
                flex-wrap: wrap;
            }
            .tables{
                border: 1px solid;
                margin: 10px;
                padding: 10px;
            }
            .table:nth-child(odd){
                background: #d4d4d4;
            }
        </style>
    </head>
    <body>
        <h1>Print 2 to 20 Tables</h1>
        <div class="blocks">
            <?php
                for ($j=2; $j <=20 ; $j++) { 
                    $tables= $j;
                    echo "<div class='table'>";
                    for ($i=1; $i <=10 ; $i++) { 
                        echo $tables."*".$i."=".$tables*$i."<br>";
                    }
                    echo "</div>";
                }
            ?>
        </div>
    </body>
</html>