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
            function odd($var)
            {
                // returns whether the input integer is odd
                return($var & 1);
            }

            function even($var)
            {
                // returns whether the input integer is even
                return(!($var & 1));
            }

            $array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
            $array2 = array(6, 7, 8, 9, 10, 11, 12);

            echo "Odd <br>";
            
            echo "<pre>";
            print_r(array_filter($array1, "odd"));
            echo "<pre>";
            
            echo "Even <br>";
            
            echo "<pre>";
            print_r(array_filter($array2, "even"));
            echo "<pre>";
        ?>
    </body>
</html>
