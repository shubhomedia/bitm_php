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
            //is_scalar — Finds whether a variable is scalar
            $no = 'this is a string';
            $car = array ("BMW", "VOLVO", "TOYOTA");
            $booldata = TRUE;
            $booldata2 = FALSE;
            $float_number = 1.1000;
            $float_number2 = -100.1000;
            
            echo is_scalar($no); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_scalar($car); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_scalar($booldata); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_scalar($booldata2); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_scalar($float_number); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_scalar($float_number2); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
        ?>
    </body>
</html>
