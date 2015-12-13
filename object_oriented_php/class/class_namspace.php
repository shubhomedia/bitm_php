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
            
            function __autoload($classname){
                include_once($classname .'.php') ;
            }


            $shubho = new student;
            $shubho -> name ="owes Shubho"; 
            $shubho -> roll ="10"; 
            $shubho -> level ="Level One"; 
            $shubho -> country ="Bangladesh"; 
            
            echo"<br>";
            $shubho->studentCome();
            
            echo"<hr/>";
            $touhid = new student;
            $touhid -> name ="Touhid Islam "; 
            $touhid -> roll ="11"; 
            $touhid -> level ="Level One"; 
            $touhid -> country ="Bangladesh"; 
            
            echo"<br>";
            $shubho->studentCome();
            
        ?>
    </body>
</html>
