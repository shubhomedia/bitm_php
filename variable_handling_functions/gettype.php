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
            //gettype — Get the type of a variable
            
            $null_variable = NULL;
            $car = array ("BMW", "VOLVO", "TOYOTA");
            $float_number = 100.1000;
            $decimal_number = 1234;
            $name = "MD.OWES QURUNY SHUBHO";
            $boolvariable = TRUE;
            
            echo gettype($null_variable);
            echo"</br>";
            echo gettype($car);
            echo"</br>";
            echo gettype($float_number);
            echo"</br>";
            echo gettype($decimal_number);
            echo"</br>";
            echo gettype($name);
            echo"</br>";
            echo gettype($boolvariable);
            echo"</br>";
                        
        ?>
    </body>
</html>
