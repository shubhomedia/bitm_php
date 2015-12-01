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
            $stack = array("orange", "banana", "apple", "raspberry");
            echo"<pre>";
            print_r($stack);
            echo"<pre>";
            
            $fruit = array_shift($stack);
            echo"<pre>";
            print_r($fruit);
            echo"<pre>";
            
            $a=array("a"=>"red","b"=>"green","c"=>"blue");
            echo"<pre>";
            print_r($a);
            echo"<pre>";
            
            echo"<pre>";
            echo array_shift($a);
            echo"<pre>";
            print_r ($a);
            
      
        ?>
    </body>
</html>
