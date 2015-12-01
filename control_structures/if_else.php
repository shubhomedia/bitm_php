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
            $a = 40;
            $b = 20;
            
            echo"A= $a" . "<br>";
            echo"B= $b" . "<br>";
            
            if($b > $a){
                echo "B is bigger Then A";
            } else {
                echo "B is Not bigger Then A";
            }
            
            /*
             * if (condition) {
                code to be executed if condition is true;
                    } else {
                code to be executed if condition is false;
                    }
             */
            
            echo "<br>" . "<br>" . "<br>";
            $t = date("H");
            if ($t > "20") {
                echo "Have a good day!";
            } else {
                echo"Have a good night";
            }
            
        ?>
    </body>
</html>
