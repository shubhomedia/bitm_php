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
            $array1 = array(0 => 100, "color" => "red");
            echo"<pre>";
            print_r(array_keys($array1));
            echo"<pre>";
           
            $array2 = array("blue", "red", "green", "blue", "blue");
            echo"<pre>";
            print_r(array_keys($array2, "blue"));
            echo"<pre>";

            $array3 = array("color" => array("blue", "red", "green"),
                           "size"  => array("small", "medium", "large"));
            echo"<pre>";
            print_r(array_keys($array3));
            echo"<pre>";
        ?>
    </body>
</html>
