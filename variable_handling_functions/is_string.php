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
            //is_string — Finds whether a variable is string
            $string_var = 'this is a string';
            $car = array ("BMW", "VOLVO", "TOYOTA");
            $booldata = TRUE;
            $booldata2 = FALSE;
            $float_number = 1.1000;
            $float_number2 = -100.1000;
            
            echo is_string($string_var); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_string($car); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_string($booldata); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_string($booldata2); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_string($float_number); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_string($float_number2); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
        ?>
    </body>
</html>

