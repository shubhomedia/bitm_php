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
            
            if ($a < $b ){
                echo"B is Bigger then A";
            } elseif ($a == $b) {
                echo"A and B Both are Equal ";
            } else {
                echo"B Is Smallar then A";
            }
            echo "<br>". "<br>". "<br>";
            
            
            /*
             * if (condition) {
                code to be executed if condition is true;
                    } elseif (condition) {
                code to be executed if condition is true;
                    } else {
                code to be executed if condition is false;
                    }
             * 
             */
            
            $t = date("H");

            if ($t < "10") {
                echo "Have a good morning!";
            } elseif ($t < "20") {
                echo "Have a good day!";
            } else {
                echo "Have a good night!";
            }
            
        ?>
    </body>
</html>
