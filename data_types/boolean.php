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
            var_dump((bool) "");  // bool(false)
            echo"</br>";
            var_dump((bool) 1);   // bool(true)
            echo"</br>";
            var_dump((bool) -2);   // bool(true)
            echo"</br>";
            var_dump((bool) "foo");  // bool(true)
            echo"</br>";
            var_dump((bool) 2.3e5);   // bool(true)
            echo"</br>";
            var_dump((bool) array(12)); // bool(true)
            echo"</br>";
            var_dump((bool) array());   // bool(false)
            echo"</br>";
            var_dump((bool) "false");   // bool(true)
        ?>
    </body>
</html>
