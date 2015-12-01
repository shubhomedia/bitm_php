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
            $firstname = "Peter";
            $lastname = "Griffin";
            $age = "41";

            $result = compact("firstname", "lastname", "age");
            echo"<pre>";
            print_r($result);
            echo"<pre>";
            
            echo"<br>";
            $city  = "San Francisco";
            $state = "CA";
            $event = "SIGGRAPH";

            $location_vars = array("city", "state");

            $result2 = compact("event", "nothing_here", $location_vars);
            echo"<pre>";
            print_r($result2);
            echo"<pre>";
        ?>
        
    </body>
</html>
