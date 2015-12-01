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
            $a = "Original";
            $my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
            extract($my_array);
            echo "\$a = $a; \$b = $b; \$c = $c";
        ?>
    </body>
</html>
