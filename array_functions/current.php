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
            $people = array("Shubho", "Rony", "Jony", "Anwar");
            
            echo" Current Value in Array Is: ";
            echo current($people) . "<br>";
            echo next($people) . "<br>";
            echo end($people) . "<br>";
            echo prev($people) . "<br>";
        ?>
    </body>
</html>
