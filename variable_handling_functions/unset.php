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
            function destroy_foo() 
            {
                global $foo;
                unset($foo);
            }

            $foo = 'bar';
            destroy_foo();
            echo $foo;
        ?>
    </body>
</html>
