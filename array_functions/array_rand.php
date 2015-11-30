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
            $a=array("red","green","blue","yellow","brown");
            $random_keys=array_rand($a,3);
            echo $a[$random_keys[0]]."<br>";
            echo $a[$random_keys[1]]."<br>";
            echo $a[$random_keys[2]];
        ?>
    </body>
</html>
