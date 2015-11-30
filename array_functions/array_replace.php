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
            
            echo "Array 1:" ."<br>";
            
            echo"<pre>";
            print_r($a1);
            echo"<pre>";

            $a2=array("blue","yellow");
            echo "Array 2:" ."<br>";
            echo"<pre>";
            print_r(array_replace($a1,$a2));
            echo"<pre>";
            
            echo "Array 1 Replace with Array 2:" ."<br>";
            echo"<pre>";
            print_r(array_replace($a1,$a2));
            echo"<pre>";
        ?>
    </body>
</html>
