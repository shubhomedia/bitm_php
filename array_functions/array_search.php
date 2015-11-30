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
            $array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

            $key = array_search('green', $array); // $key = 2;
            $key2 = array_search('red', $array);   // $key = 1;
            
            echo $key;
            echo"<br>";
            echo $key2;
            
        ?>
    </body>
</html>
