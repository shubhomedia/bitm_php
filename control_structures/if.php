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
            $a = 10;
            $b = 20;
            
            echo"A= $a" . "<br>";
            echo"B= $b" . "<br>";
            
            if($b > $a){
                echo "B is bigger Then A";
            }
            
            echo "<br>" . "<br>" . "<br>";
            $t = date("H");
            if ($t < "20") {
                echo "Have a good day!";
            }
        ?>
    </body>
</html>
