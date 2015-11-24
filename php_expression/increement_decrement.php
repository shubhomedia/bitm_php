<!DOCTYPE html>
<!--
    MD.OWES QURUNY SHUBHO
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
            $b = ++$a ;
            $c = ++$b + 10;
            $d = ++$c + 20;
            $e = $d++ * 10;
            $f = $e-- - 10;
            $g = --$e / 10;
            
            echo $a;
            echo"</br>";
            
            echo $b;
            echo"</br>";
            
            echo $c;
            echo"</br>";
            
            echo $d;
            echo"</br>";
            
            echo $e;
            echo"</br>";
            
            echo $f;
            echo"</br>";
            
            echo $g;
            echo"</br>";
            
            
            
        ?>
    </body>
</html>
