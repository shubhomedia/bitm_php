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
            echo substr_compare("abcde", "bc", 1, 2); // 0
            echo"<br>";
            
            echo substr_compare("abcde", "de", -2, 2); // 0
            echo"<br>";
            
            echo substr_compare("abcde", "bcg", 1, 2); // 0
            echo"<br>";
            
            echo substr_compare("abcde", "BC", 1, 2, true); // 0
            echo"<br>";
            
            echo substr_compare("abcde", "bc", 1, 3); // 1
            echo"<br>";
            
            echo substr_compare("abcde", "cd", 1, 2); // -1
            echo"<br>";
                             
        ?>
    </body>
</html>
