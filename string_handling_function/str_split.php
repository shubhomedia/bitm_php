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
            $str = "Hello Friend";

            $arr1 = str_split($str);
            $arr2 = str_split($str, 4);
            
            echo"<pre>";
            print_r($arr1);
            echo"<pre>";
            
            echo"<pre>";
            print_r($arr2);
            echo"<pre>";
        ?>
    </body>
</html>
