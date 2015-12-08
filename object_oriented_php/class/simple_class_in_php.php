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
            class student{
                public $name="";
                public $roll="";
            }
            
            $shubho = new student;
            $shubho->name ="Md.Owes Shubho";
            $sadia  = new student;
            $sadia->name ="sadia Islam";
            $sadia->roll ="02";
            $touhid = new student;
            $salam = new student;
            $rony = new student;
            $jony = new student;
            
            echo $shubho->name;
            echo"<hr/>";
            
            echo $sadia->name;
            echo"<hr/>";
            echo $sadia->roll;
            echo"<hr/>";
            
            echo $touhid->name;
            echo"<hr/>";
            
            
            
        ?>
    </body>
</html>
