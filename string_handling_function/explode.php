<!DOCTYPE html>
<!--
    MD.Owes Quruny Shubho
    http://shubho.info
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            // Example 1
            $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
            $pieces = explode(" ", $pizza);
            echo $pieces[0]; // piece1
            echo"</br>";
            echo $pieces[1]; // piece2
            echo"</br>";
            echo $pieces[5]; // piece6
        ?>
    </body>
</html>
