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
            class MyClass
            {
              public $prop1 = "I'm a class property!";
            }

            $obj = new MyClass;

            echo $obj->prop1; // Output the property
        ?>
    </body>
</html>
