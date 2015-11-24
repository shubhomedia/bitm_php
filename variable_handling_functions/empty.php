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
            //boolval — Get the boolean value of a variable
        
            $expected_array_got_string = 'somestring';
            var_dump(empty($expected_array_got_string['some_key']));
            echo"</br>";
            var_dump(empty($expected_array_got_string[0]));
            echo"</br>";
            var_dump(empty($expected_array_got_string['0']));
            echo"</br>";
            var_dump(empty($expected_array_got_string[0.5]));
            echo"</br>";
            var_dump(empty($expected_array_got_string['0.5']));
            echo"</br>";
            var_dump(empty($expected_array_got_string['0 Mostel']));
        ?>
    </body>
</html>
