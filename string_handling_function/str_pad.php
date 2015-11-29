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
            $input = "Alien";
            echo str_pad($input, 10);                      // produces "Alien     "
            echo"<br>";
            echo str_pad($input, 10, "-=", STR_PAD_LEFT);  // produces "-=-=-Alien"
            echo"<br>";
            echo str_pad($input, 10, "_", STR_PAD_BOTH);   // produces "__Alien___"
            echo"<br>";
            echo str_pad($input,  6, "___");               // produces "Alien_"
            echo"<br>";
            echo str_pad($input,  10, "--", STR_PAD_BOTH);   // produces "Alien"
            echo"<br>";
        ?>
    </body>
</html>
