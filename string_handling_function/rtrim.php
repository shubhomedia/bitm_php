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
            $text = "\t\tThese are a few words :) ...  ";
            $binary = "\x09Example string\x0A";
            $hello  = "Hello World";
            var_dump($text, $binary, $hello);

            print "<br>";

            $trimmed = rtrim($text);
            var_dump($trimmed);

            $trimmed2 = rtrim($text, " \t.");
            var_dump($trimmed2);

            $trimmed3 = rtrim($hello, "Hdle");
            var_dump($trimmed3);
        ?>
    </body>
</html>
