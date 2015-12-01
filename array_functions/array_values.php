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
        
            $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
            echo "Show key and Value";
            echo "<pre>";
            print_r($a);
            echo "<pre>";
            
            echo "<br>" ."<br>"."<br>";
            
            echo "Show only Value";
            echo "<pre>";
            print_r(array_values($a));
            echo "<pre>";
                  
        ?>
    </body>
</html>
