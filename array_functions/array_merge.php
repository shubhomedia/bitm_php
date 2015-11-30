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
            $a1=array("red","green");
            print_r($a1);
            echo"<br>";
            $a2=array("blue","yellow");
            print_r($a2);
            echo"<br>";
            echo"<pre>";
            print_r(array_merge($a1,$a2));
            echo"<pre>";
        ?>
    </body>
</html>
