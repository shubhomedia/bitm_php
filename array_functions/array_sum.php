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
            $array=array(5,15,25);
            echo "<pre>";
            print_r($array);
            echo "<pre>";
            
            echo"The Sum of array "  . array_sum($array);
            echo "<br>" ."<br>"."<br>";
            
            //Another example
            
            $a = array(2, 4, 6, 8);
            echo "<pre>";
            print_r($a);
            echo "<pre>";
            echo "sum(a) = " . array_sum($a) . "<br>";

            $b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
            echo "<pre>";
            print_r($b);
            echo "<pre>";
            echo "sum(b) = " . array_sum($b) . "<br>";
            
      
        ?>
    </body>
</html>
