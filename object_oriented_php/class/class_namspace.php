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
            class student {
                public $name    ="";
                public $roll    ="";
                public $level   ="";
                public $country ="";
                public $pass    ="";
                
                public function studentCome(){
                    echo"Students are comming in School";
                    echo $this->name;
                }
                public function __construct(){
                    echo $this->name;
                    echo"new Students are admited";
                    echo"<br>";
                    echo"Hello";
                }
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
            $touhid->studentCome();
            
        ?>
    </body>
</html>
