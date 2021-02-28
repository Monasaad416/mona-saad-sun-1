<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment no.1</title>
</head>
<body>
    <h2>Multiplication Table</h2>
    <?php
    echo "<table>";
    //$i will make rows 
    for($i = 1 ; $i <= 12 ; $i++){
        echo "<tr>";

        //$j will make columns
           for($j=1 ; $j <= 12 ; $j++){
               echo "<th>";
                    echo "<td>$i * $j = </td> ";
                    $i*$j;
               echo "</th>";
           }
        echo"</tr>";
    };
        

    echo "</table>";
    ?>
    <hr/>
</body>
</html>

<?php