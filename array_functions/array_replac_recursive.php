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
                                   
            $a1=array("a"=>array("red"),"b"=>array("green","blue"),);
            echo "Array 1:" ."<br>";
            
            echo"<pre>";
            print_r($a1);
            echo"<pre>";
            
            $a2=array("a"=>array("yellow"),"b"=>array("black"));
            echo "Array 2:" ."<br>";
            echo"<pre>";
            print_r(array_replace($a1,$a2));
            echo"<pre>";
            
            print_r(array_replace_recursive($a1,$a2));
        ?>
    </body>
</html>
