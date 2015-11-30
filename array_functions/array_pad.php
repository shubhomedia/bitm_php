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
            $input = array(12, 10, 9);

            $result1 = array_pad($input, 5, 0);
            // result is array(12, 10, 9, 0, 0)
            
            print_r($result1);
            echo"<br>";
            
            $result2 = array_pad($input, -7, -1);
            // result is array(-1, -1, -1, -1, 12, 10, 9)
            print_r($result2);
            echo"<br>";
            $result3 = array_pad($input, 2, "noop");
            print_r($result3);
            echo"<br>";
            
// not padded
        ?>
    </body>
</html>
