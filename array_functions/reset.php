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
            echo"<pre>";
            print_r($people);
            echo"<pre>";
            echo" Pos Value in Array Is: ";
            echo pos($people) . "<br>";
            echo"Next :";
            echo next($people) . "<br>";
            echo"Next :";
            echo next($people) . "<br>";
            echo"Next :";
            echo next($people) . "<br>";
            reset ($people);
            
            echo"Reset Value in Array Is: ";
            echo current($people);
            
            
        ?>
    </body>
</html>
