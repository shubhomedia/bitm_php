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
            $str = "Is your name O'Reilly?";

            // Outputs: Is your name O\'Reilly?
            echo addslashes($str);
        ?>
    </body>
</html>
