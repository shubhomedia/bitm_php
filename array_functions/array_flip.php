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
            $input = array("oranges", "apples", "pears");
            $flipped = array_flip($input);
            
            echo "<pre>";
            print_r($flipped);
            echo "<pre>";
        ?>
    </body>
</html>
