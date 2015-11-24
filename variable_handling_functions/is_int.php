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
            //is_int — Finds whether a variable is integer
            $no = 'this is a string';
            $car = array ("BMW", "VOLVO", "TOYOTA");
            $booldata = TRUE;
            $booldata2 = FALSE;
            $float_number = 1.1000;
            $float_number2 = -100.1000;
            $integer_value = 1000;
            $integer_value2 = 99999;
            
            
            echo is_int($no); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_int($car); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_int($booldata); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_int($booldata2); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_int($float_number); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_int($float_number2); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_int($integer_value); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_int($integer_value2); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            
        ?>
    </body>
</html>
