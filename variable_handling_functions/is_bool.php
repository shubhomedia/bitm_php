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
            //is_boolean — Finds whether a variable is an boolean
            $no = 'this is a string';
            $car = array ("BMW", "VOLVO", "TOYOTA");
            $booldata = TRUE;
            $booldata2 = FALSE;
            echo is_bool($no); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            echo is_bool($car); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            echo is_bool($booldata); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
            echo is_bool($booldata2); //output is boolean 1(true) or 0 (false)
            echo"</br>";
            
        ?>
    </body>
</html>
