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
            $a = array('Bangladesh', 'India', 'Dubai');
            $b = array('Dhaka', 'Delhi', 'Abu-Dhabi');
            $c = array_combine($a, $b);
            
            echo "<pre>";
            print_r($c);
            echo "<pre>";
        ?>
    </body>
</html>
