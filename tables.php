<html>
    <head>
        <title>Print 2 to 20 Table</title>
        <style>
            .block{
                display: flex;
                flex-wrap: wrap;
            }
            .table{
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
                    $table= $j;
                    echo "<div class='table'>";
                    for ($i=1; $i <=10 ; $i++) { 
                        echo $table."*".$i."=".$table*$i."<br>";
                    }
                    echo "</div>";
                }
            ?>
        </div>
    </body>
</html>