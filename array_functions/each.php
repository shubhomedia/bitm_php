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
            $people = array("Owes", "Shubho", "Rony", "Milon");
            echo"<pre>";
            print_r (each($people));
            echo"<pre>"  ."<br>";
            
            $foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
            $bar = each($foo);
            echo"<pre>";
            print_r($bar);
            echo"<pre>";

            
        ?>
    </body>
</html>
